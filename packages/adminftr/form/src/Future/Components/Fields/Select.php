<?php

namespace Adminftr\Form\Future\Components\Fields;

use Adminftr\Form\Future\Components\Field;
use Illuminate\Database\Eloquent\Model;

class Select extends Field
{
    public array $options = [];

    public bool $multiple = false;

    public string $valueField = 'id';

    public string $labelField = 'name';

    public int $maxOptions = 50;

    public bool $liveSearch = false;

    public string $keySearch = 'name';

    public Model $model;

    public int $limit = 50;

    public array $plugins = ['input_autogrow', 'caret_position'];

    protected $callbackSearch;

    public function options($options)
    {
        if (is_callable($options)) {
            $this->options = call_user_func($options);
        } else {
            $this->options = $options;
        }

        return $this;
    }

    public function plugins($plugins)
    {
        $this->plugins = $plugins;

        return $this;
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

    public function liveSearch(?callable $callback = null)
    {
        $this->liveSearch = true;
        if ($callback) {
            $this->callbackSearch = $callback;
            $this->options = call_user_func($callback, '')->toArray();
        }

        return $this;
    }

    public function keySearch(string $keySearch)
    {
        $this->keySearch = $keySearch;

        return $this;
    }

    public function model(Model $model, string $valueField = 'id', string $labelField = 'name', string $keySearch = 'name')
    {
        $this->model = $model;
        $this->valueField = $valueField;
        $this->labelField = $labelField;
        $this->keySearch = $keySearch;
        $this->liveSearch = true;
        $this->search('');
        return $this;
    }

    public function search($value)
    {
        if ($this->callbackSearch) {
            $this->options = call_user_func($this->callbackSearch, $value)->map(function ($model) {
                return [
                    $this->valueField => $model->id,
                    $this->labelField => $model->name,
                ];
            })->toArray();

            return $this;
        }
        $this->options = $this->model::where($this->keySearch, 'like', '%' . $value . '%')
            ->limit($this->limit)->get()->map(function ($model) {
                return [
                    $this->valueField => $model->id,
                    $this->labelField => $model->name,
                ];
            })->toArray();
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
            'options' => $this->options,
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
            'plugins' => $this->plugins,
        ]);
    }
}
