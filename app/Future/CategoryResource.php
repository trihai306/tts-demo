<?php

namespace App\Future;

use Adminftr\Core\Http\Resource\BaseResource;
use App\Future\CategoryResource\Form;
use App\Future\CategoryResource\Table;

class CategoryResource extends BaseResource
{
    public function __construct()
    {
        parent::__construct(
            new Table,
            new Form
        );
    }
}
