<?php

namespace Adminftr\Form\Future\Components\Fields;

use Adminftr\Form\Future\Components\Field;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Model;

class Select extends Field
{
    protected array $options = [];

    protected bool $multiple = false;

    protected string $valueField = 'id';

    protected string $labelField = 'name';

    protected int $maxOptions = 50;
    protected array $relationShipSelect = [];
    protected bool $liveSearch = false;

    protected array $searchable = ['name'];
    protected string $keySearch = 'name';
    protected int $limit = 50;
    protected bool $isRelationship = false;
    public function options(array|callable $options): static
    {
        $this->options = is_callable($options) ? $options() : $options;
        return $this;
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function getRelationship()
    {
        return $this->isRelationship;
    }

    public function relationship(string $name, string $titleAttribute, callable $modifyQueryUsing = null, array $select = [])
    {
        $this->relationshipName = $name;
        $this->labelField = $titleAttribute;
        $this->modifyQueryUsing = $modifyQueryUsing;
        $this->isRelationship = true;
        $this->liveSearch = true;
        $this->relationShipSelect = $select;
        return $this;
    }

    public function searchable(array $searchable)
    {
        $this->searchable = $searchable;

        return $this;
    }


    public function getItemsRelation($model,string $value)
    {
        $model = new $model;
        if (!method_exists($model, $this->relationshipName)) {
            throw new Exception("The relationship {$this->relationshipName} does not exist on the model.");
        }
        $modelRelation = $model->{$this->relationshipName}();
        $relatedModelName = $modelRelation->getRelated();
        $select = [$this->valueField, $this->labelField];
        $select =
        $query = $relatedModelName::query();
        if ($this->modifyQueryUsing) {
            $query = call_user_func($this->modifyQueryUsing, $query);
        }
        foreach ($this->searchable as $searchable) {
            $query->orWhere($searchable, 'like', '%' . $value . '%');
        }
        return $query->limit($this->limit)->get();
    }


    public function maxOptions(int $maxOptions)
    {
        $this->maxOptions = $maxOptions;

        return $this;
    }

    public function valueField(string $valueField)
    {
        $this->valueField = $valueField;

        return $this;
    }


    public function keySearch(string $keySearch)
    {
        $this->keySearch = $keySearch;

        return $this;
    }


    public function limit(int $limit)
    {
        $this->limit = $limit;

        return $this;
    }

    public function multiple(bool $multiple = true)
    {
        $this->multiple = $multiple;

        return $this;
    }



    public function render()
    {
        return view('form::base.form.select', [
            'isRequired' => $this->isRequired,
            'classes' => $this->classes,
            'attributes' => $this->getAttributes(),
            'defaultValue' => $this->defaultValue,
            'label' => $this->label,
            'canHide' => $this->canHide,
            'name' => $this->name,
            'multiple' => $this->multiple,
            'reactive' => $this->reactive,
            'valueField' => $this->valueField,
            'maxOptions' => $this->maxOptions,
            'liveSearch' => $this->liveSearch,
            'keySearch' => $this->keySearch,
            'labelField' => $this->labelField,
            'isRelationship' => $this->isRelationship,
        ]);
    }
}
