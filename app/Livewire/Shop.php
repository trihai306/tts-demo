<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class Shop extends Component
{
    use WithPagination;

    public $category = '';
    public $priceRange = 5000000;

    protected $queryString = ['category', 'priceRange'];

    public function updatingCategory()
    {
        $this->resetPage();
    }

    public function updatingPriceRange()
    {
        $this->resetPage();
    }

    public function render()
    {
        $products = Product::query()
            ->when($this->category, function ($query) {
                $query->where('category_id', $this->category);
            })
            ->where('price', '<=', $this->priceRange)
            ->paginate(9);

        return view('livewire.shop', [
            'products' => $products,
        ]);
    }
}
