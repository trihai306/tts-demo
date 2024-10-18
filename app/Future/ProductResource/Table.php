<?php

namespace App\Future\ProductResource;

use Adminftr\Table\Future\BaseTable;
use Adminftr\Table\Future\Components\Actions\Action;
use Adminftr\Table\Future\Components\Actions\Actions;
use Adminftr\Table\Future\Components\Columns\ImageColumn;
use Adminftr\Table\Future\Components\Columns\TextColumn;
use Adminftr\Table\Future\Components\Headers\Actions\ResetAction;
use Adminftr\Widgets\Future\Stat;
use App\Models\Product;
use Illuminate\Support\HtmlString;

class Table extends BaseTable
{
    public string $title = 'Quản lý sản phẩm';
    protected string $model = Product::class;
    protected array $select = ['special_price_to', 'special_price_to', 'meta_keywords', 'meta_description', 'width', 'height', 'quantity', 'weight'];
    protected array $searchable = ['name', 'sku', 'tax_category', 'short_description', 'meta_title', 'price', 'special_price', 'status'];
    protected array $with = [
        'images','brand'
    ];
    protected function columns(): array
    {
        return [
            TextColumn::make('id', __('ID'))->searchable()->sortable(),
            ImageColumn::make('image',__('Image'))->value(function ($model){
                return $model->images->first()->file_path ?? '';
            }),
            TextColumn::make('name', __('Name'))->sortable(),
            TextColumn::make('sku', __('Sku'))->sortable(),
            TextColumn::make('tax_category', __('Tax Category'))->sortable(),
            TextColumn::make('short_description', __('Short Description'))->sortable(),
            TextColumn::make('meta_title', __('Meta Title'))->sortable()->description(function (Product $product) {
            return new HtmlString('<p>Từ khóa: ' . $product->meta_keywords . '</p>
                                       <p>Mô tả: ' . $product->meta_description . '</p>');
        })->width('400px'), TextColumn::make('price', __('Price'))->sortable(), TextColumn::make('special_price', __('Special Price'))->width('400px')->sortable()->description(function (Product $product) {
                return new HtmlString('<p>Từ: ' . $product->special_price_from . '</p>
                                       <p>Đến: ' . $product->special_price_to . '</p>');
            }), TextColumn::make('product_attribute', __('Product Attributes'))->renderHtml(function (Product $product) {
            return new HtmlString('<p>Width: ' . $product->width . '</p>
                                       <p>Height: ' . $product->height . '</p>
                                       <p>Quantity: ' . $product->quantity . '</p>
                                       <p>Weight: ' . $product->weight . '</p>');
        }), TextColumn::make('status', __('Status'))->sortable()->badge(['1' => 'success', '0' => 'danger',], ['1' => __('Active'), '0' => __('Inactive'),]),];
    }

    protected function actions(Actions $actions)
    {
        return $actions->create([Action::make('edit', __('Edit'))->link(function (Product $product) {
            return route('admin.products.edit', $product->id);
        }),]);
    }

    protected function headerActions(): array
    {
        return [ResetAction::make(),];
    }

    protected function filters(): array
    {
        return [];
    }

    protected function widgets()
    {
        return [
       ];
    }
}
