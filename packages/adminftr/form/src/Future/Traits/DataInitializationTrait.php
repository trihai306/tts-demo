<?php

namespace Adminftr\Form\Future\Traits;

trait DataInitializationTrait
{
    protected array $selectColumns = ['id'];

    private function initializeData($inputs)
    {
        if ($this->id && $this->model) {
            $this->loadModelData($inputs);
        } else {
            $this->loadDefaultData($inputs);
        }
    }

    private function loadModelData($inputs)
    {
        [$fields, $relations, $with] = $this->getRelationship($inputs);
        $this->model = $this->model::with($with)->select('*')->find($this->id);
        if ($this->model) {
            $this->data = $this->model->toArray();
            foreach ($relations as $relation => $fieldName) {
                if (isset($this->data[$relation])) {
                    $this->data[$fieldName] = $this->data[$relation];
                    unset($this->data[$relation]);
                }
            }
        } else {
            $this->data = [];
        }
    }

    private function getRelationship($inputs)
    {
        $fieldNames = array_map(fn($input) => $input->name, array_filter($inputs, fn($input) => $input->canHide !== true));
        $relations = [];
        $fields = [];
        $with = [];
        foreach ($fieldNames as $fieldName) {
            if (str_contains($fieldName, '_confirmation')) {
                $fieldName = str_replace('_confirmation', '', $fieldName);
                $fields[] = $fieldName;
            } elseif (str_contains($fieldName, '.')) {
                $parts = explode('.', $fieldName);
                $fieldName = str_replace('.', '_', $fieldName);
                $with[] = $parts[0];
                $relations[$parts[0]] = $fieldName;
            } else {
                $fields[] = $fieldName;
            }
        }
        return [$fields, $relations, $with];
    }

    private function loadDefaultData($inputs)
    {
        foreach ($inputs as $input) {
            $this->data[$input->name] = $input->defaultValue;
        }
    }
}
