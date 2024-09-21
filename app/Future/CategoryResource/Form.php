<?php

namespace App\Future\CategoryResource;

use Adminftr\Form\Future\BaseForm;
use Adminftr\Form\Future\Components\Fields\Checkbox;
use Adminftr\Form\Future\Components\Fields\Radio;
use Adminftr\Form\Future\Components\Fields\RadioTree;
use Adminftr\Form\Future\Components\Fields\RichEditor;
use Adminftr\Form\Future\Components\Fields\Text;
use Adminftr\Form\Future\Components\Fields\TextArea;
use Adminftr\Form\Future\Components\Fields\TextInput;
use Adminftr\Form\Future\Components\Fields\Toggle;
use Adminftr\Form\Future\Components\Fields\Upload;
use Adminftr\Form\Future\Components\Layouts\Card;
use Adminftr\Form\Future\Components\Layouts\Col;
use Adminftr\Form\Future\Components\Layouts\Row;
use App\Models\Category;

class Form extends BaseForm
{
    public $model = Category::class;

    public function form(\Adminftr\Form\Future\Components\Form $form)
    {
        return $form->schema([
            Row::make()->schema([
               Col::make()->schema([
                    Row::make()->schema([
                        Card::make(__('General'))->schema([
                            Row::make()->schema([
                                TextInput::make('name')->label(__('Name'))->rules('required')->col(),
                                RadioTree::make('parent_id')->label(__('Parent'))
                                    ->options(function (){
                                        $categories = Category::with('children')->whereNull('parent_id')->get();
                                        return $categories->map(function ($category) {
                                            return [
                                                'id' => $category->id,
                                                'name' => $category->name,
                                                'children' => $category->children->map(function ($subCategory) {
                                                    return ['id' => $subCategory->id, 'name' => $subCategory->name];
                                                })->toArray()
                                            ];
                                        })->toArray();
                                    }),
                            ]),
                        ]),
                        Card::make(__('Description and image'))->schema([
                            Row::make()->schema([
                                RichEditor::make('description')->label(__('Description'))->col(),
                                Upload::make('image')->label(__('Image'))->col(),
                            ]),
                        ]),
                        Card::make(__('SEO Details'))->schema([
                            Text::make('meta_title')->color('text-primary')->tag('h3'),
                            Text::make('meta_description')->tag('p'),
                            TextInput::make('meta_title')->label(__('Meta Title'))->col(),
                            TextInput::make('slug')->label(__('Slug'))->col(),
                            TextArea::make('meta_description')->label(__('Meta Description'))->col(),
                        ]),
                    ]),
               ])->md('12')->lg('8')->sm('8'),
                Col::make()->schema([
                   Row::make()->schema([
                       Card::make(__('Status'))->schema([
                           Row::make()->schema([
                               TextInput::make('position')->label(__('Position'))->col(),
                               Toggle::make('visible_in_menu')->label(__('Visible in menu'))->col(),
                           ]),
                       ]),
                    ]),
                ])->md('12')->lg('4')->sm('4'),
            ]),

        ]);
    }
}
