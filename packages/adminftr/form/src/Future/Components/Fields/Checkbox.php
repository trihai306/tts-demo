<?php


namespace Adminftr\Form\Future\Components\Fields;

use Adminftr\Form\Future\Components\Field;

class Checkbox extends Field
{
    public $options = [];
    public function options(array|callable $options)
    {
        $this->options = $options;
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
        ]);
    }
}
