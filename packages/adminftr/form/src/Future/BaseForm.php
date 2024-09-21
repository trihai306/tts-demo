<?php

namespace Adminftr\Form\Future;

use Adminftr\Form\Future\Components\Form;
use Adminftr\Form\Future\Components\UrlHelper;
use Adminftr\Form\Future\Traits\DataInitializationTrait;
use Adminftr\Form\Future\Traits\DataPersistenceTrait;
use Adminftr\Form\Future\Traits\DataValidationTrait;
use Adminftr\Form\Future\Traits\FieldExtractionTrait;
use Adminftr\Form\Future\Traits\NotificationTrait;
use Adminftr\Form\Future\Traits\SearchDataTrait;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Locked;
use Livewire\Component;
use Livewire\WithFileUploads;

abstract class BaseForm extends Component
{
    use DataInitializationTrait,
        DataPersistenceTrait,
        DataValidationTrait,
        FieldExtractionTrait,
        NotificationTrait,
        WithFileUploads,
        SearchDataTrait;

    #[Locked]
    public $id = null;

    public array $data = [];
    #[Locked]
    public $url;

    #[Locked]
    protected $form;
    protected $model;
    protected string $view = 'form::base-form';

    public function mount()
    {
        $this->initializeData($this->getInputFields());
    }

    public function boot(Form $form)
    {
        UrlHelper::setUrl($this->url);
        $this->form = $this->form($form);
    }

    abstract public function form(Form $form);

    public function updated($property)
    {
        $this->afterStateUpdated($property);
    }

    protected function afterStateUpdated($property)
    {
        $this->skipRender();
        foreach ($this->getInputFields() as $input) {
            if ($input->afterStateUpdated && 'data.' . $input->name == $property) {
                $this->data = call_user_func($input->afterStateUpdated, $this->data);
            }
        }
    }



    public function save()
    {
        DB::beginTransaction();
        if (!empty($this->rules())) {
            $this->validate();
        }
        try {
            $url = $this->url;
            if (str_contains($url, 'edit')) {
                $this->data = $this->beforeUpdate($this->data);
            } else {
                $this->data = $this->beforeSave($this->data);
            }
            $this->persistData();
            if (function_exists('afterSave')) {
                return $this->afterSave($this->data);
            }
            DB::commit();
            $this->notificationOk('Save success');
            $this->dispatch('form-saved');
        } catch (Exception $e) {
            DB::rollBack();
            $this->notificationError($e->getMessage());
        }
    }

    protected function beforeUpdate(array $data)
    {
        return $data;
    }

    protected function beforeSave(array $data)
    {
        return $data;
    }

    public function inputActions($name)
    {
        $this->skipRender();
        $inputs = $this->getInputFields();
        foreach ($inputs as $input) {
            if ($input->name == $name) {
                call_user_func($input->action['action'], $this);
            }
        }
    }

    public function methodActions($name)
    {
        $this->skipRender();
        $actions = $this->Actions();
        foreach ($actions as $action) {
            if ($action->name == $name) {
                call_user_func($action->callback, $this);
            }
        }
    }

    protected function Actions()
    {
        return [];
    }


    public function checkBoxOptions($name)
    {
        $this->skipRender();
        $inputs = $this->getInputFields();
        foreach ($inputs as $input) {
            if ($input->name === $name) {
                return is_callable($input->options) ? call_user_func($input->options) : $input->options;
            }
        }
        return [];
    }

    public function getItemsRelation($name,$search)
    {
        $this->skipRender();
        $inputs = $this->getInputFields();
        foreach ($inputs as $input) {
            if ($input->name === $name) {
                return $input->relation($search);
            }
        }
        return [];
    }

    public function render()
    {
        return view($this->view);
    }

}
