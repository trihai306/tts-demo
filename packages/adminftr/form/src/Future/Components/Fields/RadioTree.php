<?php

namespace Adminftr\Form\Future\Components\Fields;

use Adminftr\Form\Future\Components\Field;

class RadioTree extends Field
{
    public array $options = [];

    public function options($source)
    {
        if (is_callable($source)) {
            $this->options = $source();
        } elseif (is_array($source)) {
            $this->options = $source;
        } else {
            throw new \InvalidArgumentException('Options must be a callable or an array.');
        }
        if (!$this->validateOptionsStructure($this->options)) {
            throw new \InvalidArgumentException('Invalid options structure.');
        }
        return $this;
    }

    private function validateOptionsStructure(array $options): bool
    {
        foreach ($options as $option) {
            if (!isset($option['id'], $option['name'])) {
                return false;
            }

            if (isset($option['children']) && !is_array($option['children'])) {
                return false;
            }

            // Validate sub-categories structure recursively if present
            if (!empty($option['children'])) {
                if (!$this->validateOptionsStructure($option['children'])) {
                    return false;
                }
            }
        }

        return true;
    }
    public function render()
    {
        return view('form::base.form.radio-tree',[
            'name' => $this->name,
            'label' => $this->label,
            'required' => $this->isRequired,
        ]);
    }
}
