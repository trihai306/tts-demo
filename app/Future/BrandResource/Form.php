<?php
namespace App\Future\BrandResource;

use Adminftr\Form\Future\BaseForm;
use Adminftr\Form\Future\Components\Fields\TextArea;
use Adminftr\Form\Future\Components\Fields\TextInput;
use Adminftr\Form\Future\Components\Layouts\Card;
use App\Models\Brand;

class Form extends BaseForm
{
     public $model = Brand::class;

    public function form(\Adminftr\Form\Future\Components\Form $form)
        {
          return $form->schema([
            Card::make(__('General'))->schema([
                TextInput::make('name')->label(__('Name'))->required()->rules('required'),
                TextArea::make('description')->label(__('Description')),
            ]),
          ]);
        }
}
