<?php

namespace Adminftr\Form\Future\Traits;

use Exception;

trait DataPersistenceTrait
{
    private function persistData()
    {
        if ($this->getUploadFields()){
            foreach ($this->getUploadFields() as $field) {
                $name = str_replace('.', '_', $field->name);
                if (!is_array($this->data[$name])) {
                    if($this->data[$name] instanceof \Illuminate\Http\UploadedFile){
                        $getClientOriginalName = str_replace(' ', '_', $this->data[$name]->getClientOriginalName());
                        $this->data[$name]->storeAs($field->path, $getClientOriginalName, $field->disk);
                        $this->data[$name] = $field->path . '/' . $getClientOriginalName;
                    }
                }
                else{
                    foreach ($this->data[$name] as $key => $file) {
                        if($file instanceof \Illuminate\Http\UploadedFile){
                            $getClientOriginalName = str_replace(' ', '_', $file->getClientOriginalName());
                            $file->storeAs($field->path, $getClientOriginalName, $field->disk);
                            $this->data[$name][] = $field->path . '/' . $getClientOriginalName;
                            unset($this->data[$name][$key]);
                        }
                    }
                }
            }
        }
        if ($this->id) {
            $this->updateModel();
        } else {
            $this->createModel();
        }
    }

    private function updateModel()
    {
        [$modelData, $relationshipData] = $this->separateData();
        $model = $this->model::find($this->id);
        if (!$model) {
            throw new Exception('Record not found.');
        }

        //remove null values
        $modelData = array_filter($modelData, function ($value) {
            return $value !== null;
        });
        $model->update($modelData);
        foreach ($relationshipData as $relation => $data) {
            $relationParts = explode('_', $relation, 2);
            $relationName = $relationParts[0];
            $keyField = $relationParts[1];
            $field = $this->findRelationshipField($relationName.'.'.$keyField);

            if ($model->$relationName()) {
                if ($model->$relationName() instanceof \Illuminate\Database\Eloquent\Relations\BelongsToMany) {
                    if (is_array($data) && count($data) > 0) {
                        $model->$relationName()->detach();
                        foreach ($data as $value){
                            if (is_callable($field->beforeSave)){
                                $data = call_user_func($field->beforeSave, [$keyField => $value]);
                            }
                           $model->$relationName()->syncWithoutDetaching($value);
                        }
                    }
                }
                else{
                    if (is_array($data) && count($data) > 0) {
                        foreach ($data as $value) {
                            if ($field->beforeSave){
                                $data = call_user_func($field->beforeSave, [$keyField => $value]);
                            }
                            if (is_array($value)){
                                $value = $value[$keyField];
                                $data[$keyField] = $data[$keyField][$keyField];
                            }
                            $model->$relationName()->updateOrCreate(
                                [$keyField => $value],
                                $data
                            );
                        }
                    }
                    else{
                        if ($model->$relationName()->exists()){
                            $model->$relationName()->delete();
                        }
                    }
                }

            }
        }
        $inputs =$this->getInputFields();
        [$fields, $relations, $with] = $this->getRelationship($inputs);
        $this->data = $this->model::with($with)->select('*')->find($this->id)->toArray();
        foreach ($relations as $relation => $fieldName) {
            if (isset($this->data[$relation])) {
                $this->data[$fieldName] = $this->data[$relation];
                unset($this->data[$relation]);
            }
        }
    }

    private function separateData()
    {
        $relationshipFields = $this->getRelationshipFields();
        $relationshipFieldNames = array_map(function ($field) {
            return str_replace('.', '_', $field->name);
        }, $relationshipFields);
        $modelData = [];
        $relationshipData = [];
        foreach ($this->data as $key => $value) {
            if (in_array($key, $relationshipFieldNames)) {
                $relationshipData[$key] = $value;
            } else {
                $modelData[$key] = $value;
            }
        }
        return [$modelData, $relationshipData];
    }

    private function createModel()
    {
        [$modelData, $relationshipData] = $this->separateData();
        $model = $this->model::create($modelData);

        foreach ($relationshipData as $relation => $data) {
            $relationParts = explode('_', $relation, 2);
            $relation = $relationParts[0];
            if ($model->$relation()) {
                if (is_array($data)) {
                    $model->$relation()->syncWithoutDetaching($data);
                }
            }
        }
    }
}
