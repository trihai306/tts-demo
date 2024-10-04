<?php


namespace Adminftr\Form\Future\Components\Fields;

use Adminftr\Form\Future\Components\Field;

class Checkbox extends Field
{
    protected $options = [];
    protected $isRelationship = false;
    protected string $relationshipName = '';
    protected string $titleAttribute = 'name';
    protected string $key = 'id';
    protected string $description = 'description';
    public function options(array|callable $options)
    {
        $this->options = $options;
        return $this;
    }

    public function getOptions()
    {
        return $this->options;
    }

    public function getRelationship(): bool
    {
        return $this->isRelationship;
    }

    public function getTitleAttribute(): string
    {
        return $this->titleAttribute;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function relationship(string $name, string $titleAttribute, callable $modifyQueryUsing = null)
    {
        $this->relationshipName = $name;
        $this->titleAttribute = $titleAttribute;
        $this->modifyQueryUsing = $modifyQueryUsing;
        $this->isRelationship = true;
        return $this;
    }

    public function getOptionsInRelationship($model)
    {
        $model = new $model;
        if (!method_exists($model, $this->relationshipName)) {
            throw new Exception("The relationship {$this->relationshipName} does not exist on the model.");
        }
        $query = $model->{$this->relationshipName}();
        $relatedModelName = $query->getRelated();
        $query = $relatedModelName::query();
        if ($this->modifyQueryUsing) {
            $query = call_user_func($this->modifyQueryUsing, $query);
        }
        return $query->get()->map(function ($item) {
            return [
                "{$this->key}" => $item->{$this->key},
                "{$this->titleAttribute}" => $item->{$this->titleAttribute},
                "{$this->description}" => $item->{$this->description} ?? '',
            ];
        });
    }

    public function key($key)
    {
        $this->key = $key;
        return $this;
    }


    public function render()
    {
        $required = $this->isRequired ? 'required' : '';
        return view('form::base.form.checkbox',[
            'required' => $required,
            'classes' => $this->classes,
            'attributes' => $this->getAttributes(),
            'name' => $this->name,
            'label' => $this->label,
            'canHide' => $this->canHide,
            'reactive' => $this->reactive,
            'titleAttribute' => $this->titleAttribute,
            'key' => $this->key,
            'isRelationship' => $this->isRelationship,
            'description' => $this->description,
        ]);
    }
}
