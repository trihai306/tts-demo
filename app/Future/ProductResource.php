<?php

namespace App\Future;

use Adminftr\Core\Http\Resource\BaseResource;
use App\Future\ProductResource\Form;
use App\Future\ProductResource\Table;

class ProductResource extends BaseResource
{
    public function __construct()
    {
        parent::__construct(
            new Table,
            new Form
        );
    }
}
