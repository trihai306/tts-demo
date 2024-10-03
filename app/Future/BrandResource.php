<?php

namespace App\Future;
use App\Future\BrandResource\Form;
use App\Future\BrandResource\Table;
use Adminftr\Core\Http\Resource\BaseResource;

class BrandResource extends BaseResource
{
      public function __construct()
        {
            parent::__construct(
                new Table(),
                new Form()
            );
        }
}
