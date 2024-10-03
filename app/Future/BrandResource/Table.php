<?php

namespace App\Future\BrandResource;

use Adminftr\Table\Future\BaseTable;
use Adminftr\Table\Future\Components\Actions\Action;
use Adminftr\Table\Future\Components\Actions\Actions;
use Adminftr\Table\Future\Components\Columns\TextColumn;
use Adminftr\Table\Future\Components\Filters\TextFilter;
use Adminftr\Table\Future\Components\Headers\Actions\ResetAction;
use App\Models\Brand;

class Table extends BaseTable
{
    protected string $model = Brand::class;

    protected function columns(): array
    {
        return [
            TextColumn::make('name',__('Name'))->sortable(),
            TextColumn::make('description',__('Description'))->sortable()->words(20),
            TextColumn::make('created_at',__('Created At'))->sortable(),
            TextColumn::make('updated_at',__('Updated At'))->sortable(),
        ];
    }

    protected function actions(Actions $actions)
    {
        return $actions->create([
            Action::make('edit',__('Edit'))->link(function (Brand $brand) {
                return route('admin.brands.edit',$brand->id);
            }),
        ]);
    }

    protected function headerActions(): array
    {
        return [
            ResetAction::make(),
            \Adminftr\Table\Future\Components\Headers\Actions\Action::make('create',__('Create'))
            ->to(route('admin.brands.create')),
        ];
    }

    protected function filters(): array
    {
        return [
            TextFilter::make('name',__('Name')),
        ];
    }
}
