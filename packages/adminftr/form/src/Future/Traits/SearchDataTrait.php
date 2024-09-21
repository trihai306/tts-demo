<?php
namespace Adminftr\Form\Future\Traits;

trait SearchDataTrait
{
    public function searchSelect($value, $field)
    {
        $this->skipRender();
        $selectFields = $this->getSelectFields();

        foreach ($selectFields as $selectField) {
            if ($selectField->name == $field) {
                return $selectField->search($value)->options;
            }
        }

        return [];
    }

    public function optionsRadioTree($name)
    {
        $this->skipRender();
        $radioTreeFields = $this->getRadioTreeField($name);
      return $radioTreeFields->options;
    }
}
