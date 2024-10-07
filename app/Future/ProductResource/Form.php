<?php

namespace App\Future\ProductResource;

use Adminftr\Form\Future\BaseForm;
use Adminftr\Form\Future\Components\Fields\Checkbox;
use Adminftr\Form\Future\Components\Fields\DateInput;
use Adminftr\Form\Future\Components\Fields\Relation;
use Adminftr\Form\Future\Components\Fields\RichEditor;
use Adminftr\Form\Future\Components\Fields\Select;
use Adminftr\Form\Future\Components\Fields\Text;
use Adminftr\Form\Future\Components\Fields\TextArea;
use Adminftr\Form\Future\Components\Fields\TextInput;
use Adminftr\Form\Future\Components\Fields\TextNumber;
use Adminftr\Form\Future\Components\Fields\Upload;
use Adminftr\Form\Future\Components\Layouts\Card;
use Adminftr\Form\Future\Components\Layouts\Col;
use Adminftr\Form\Future\Components\Layouts\Row;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;

class Form extends BaseForm
{
    public $model = Product::class;

    protected array $selectColumns = ['created_at', 'updated_at', 'id'];

    public function form(\Adminftr\Form\Future\Components\Form $form)
    {
        return $form->schema([

            Row::make()->schema([
                Col::make()->schema([
                    Card::make('General')->schema([
                        Row::make()->schema([
                            TextInput::make('name')->label(__('Name'))->required()->reactive()
                                ->afterStateUpdated(function ($data) {
                                    $data['url_key'] = Str::slug($data['name']);
                                    return $data;
                                }),
                            TextInput::make('sku')->label(__('SKU'))->required(),
                            TextInput::make('url_key')->label(__('URL Key'))->required(),
                            Text::make('url_key')->tag('a')->color('text-primary')
                                ->beforeText(function () {
                                    return "<span class='text-muted'>Preview: </span>";
                                })->beforeValue(function () {
                                    return url('product/').'/';
                                }),
                            Select::make('id_brand')->label(__('Brand'))->relationship('brand', 'name'),
                        ]),
                    ]),
                ])->md(8)->sm(12),
                Col::make()->schema([
                    Card::make('Price')->schema([
                        Row::make()->schema([
                            TextNumber::make('price',__('Price'))->required(),
                            TextNumber::make('special_price',__('Special Price')),
                            DateInput::make('special_price_from',__('Special Price From')),
                            DateInput::make('special_price_to',__('Special Price To')),
                        ]),
                    ]),
                ])->md(4)->sm(12),
            ]),
            Row::make()->schema([
                Col::make()->schema([
                    Card::make('Description')->schema([
                        Row::make()->schema([
                            RichEditor::make('short_description')->label(__('Short Description'))->required(),
                            RichEditor::make('description')->label(__('Description'))->required(),
                            Upload::make('fileManagers')->label(__('Image'))->relationship('images', 'file_path')
                                ->maxFiles(5),
                        ]),
                    ]),
                ])->md(8)->sm(12),
                Col::make()->schema([
                    Row::make()->schema([
                        Card::make('Attributes')->schema([
                            Checkbox::make('categories')->label(__('Categories'))->relationship('categories', 'name'),
                        ]),
                    ]),
                ])->md(4)->sm(12),
            ]),
            Row::make()->schema([
                Col::make()->schema([
                    Card::make('Meta')->schema([
                        Row::make()->schema([
                            Text::make('meta_title')->tag('h2')->color('text-primary'),
                            Text::make('url_key')->tag('a')
                                ->beforeValue(function () {
                                    return url('product').'/';
                                })->color('text-green'),
                            Text::make('meta_description')->tag('p'),
                        ]),
                        Row::make()->schema([
                            TextInput::make('meta_title')->label(__('Meta Title'))->required(),
                            TextArea::make('meta_description')->label(__('Meta Description'))->required(),
                        ]),
                    ]),
                ])->md(8)->sm(12),

                Col::make()->schema([
                    Relation::make('products')->title('Related Products')->model(Product::class, [
                        'id' => 'id',
                        'name' => 'name',
                        'description' => 'description',
                        'sub_title' => 'price',
                        'avatar' => [
                            'column' => function ($item) {
                                $items = $item->images->first();
                                return $item ? $item->file_path : null;
                            },
                            'relation' => 'images',
                        ],
                    ]),
                ])->md(12)->sm(12),
            ]),
        ]);
    }
}
