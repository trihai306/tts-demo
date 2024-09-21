<?php

namespace App\Future\CategoryResource;

use Adminftr\Form\Future\Components\Fields\Select;
use Adminftr\Table\Future\BaseTable;
use Adminftr\Table\Future\Components\Actions\Action;
use Adminftr\Table\Future\Components\Columns\ImageColumn;
use Adminftr\Table\Future\Components\Columns\TextColumn;
use Adminftr\Table\Future\Components\Filters\Filter;
use Adminftr\Table\Future\Components\Filters\SelectFilter;
use Adminftr\Table\Future\Components\Filters\TextFilter;
use Adminftr\Table\Future\Components\Headers\Actions\Action as HeaderAction;
use Adminftr\Table\Future\Components\Headers\Actions\ResetAction;
use App\Models\Category;

class Table extends BaseTable
{
    protected string $model = Category::class;

    protected function columns(): array
    {
        return [
            TextColumn::make('id', __('ID')),
            ImageColumn::make('image', __('Image'))->width('50px'),
            TextColumn::make('name', __('Name'))->searchable(),
            TextColumn::make('slug', __('Slug'))->searchable(),
            TextColumn::make('position', __('Position')),
            TextColumn::make('visible_in_menu', __('Visible in Menu'))->badge([
                '1' => 'success',
                '0' => 'danger',
            ],[
                '1' => 'Yes',
                '0' => 'No',
            ]),
            TextColumn::make('parent_id', __('Parent Category'))->renderHtml(function (Category $category) {
                return $category->parent ? $category->parent->name : '';
            }),
            TextColumn::make('status', __('Status'))->badge([
                'active' => 'success',
                'inactive' => 'danger',
            ]),
        ];
    }

    protected function actions(\Adminftr\Table\Future\Components\Actions\Actions $actions)
    {
        return $actions->create([
            Action::make('edit', __('Edit'))->link(function (Category $category) {
                return route('admin.categorys.edit', $category->id);
            })]);

    }

    protected function filters(): array
    {
        return [
            TextFilter::make('name', __('Name'),'like'),
            TextFilter::make('slug', __('Slug'),'like'),
            SelectFilter::make('status', __('Status'))->options([
                'active' => __('Active'),
                'inactive' => __('Inactive'),
            ]),
        ];
    }

    protected function headerActions(): array
    {
        return [
            ResetAction::make(),
            HeaderAction::make('create', __('Create Category'))->to(route('admin.categorys.create'))
        ];
    }
}
