<?php

namespace App\Livewire;

use Livewire\Attributes\Session;
use Livewire\Component;

class SidebarCart extends Component
{
    #[Session]
    public $cartItems = [];
    #[Session]
    public $wishlistItems = [];
    public $totalAmount = 0;

    protected $listeners = ['cartUpdated' => 'updateCart', 'wishlistUpdated' => 'updateWishlist'];


    public function mount()
    {
        $this->cartItems = $this->cartItems ?? [];
        $this->wishlistItems = $this->wishlistItems ?? [];
        $this->calculateTotalAmount();
    }

    public function updateCart($cartItems)
    {
        $this->cartItems = $cartItems;
        $this->calculateTotalAmount();
    }

    public function updateWishlist($wishlistItems)
    {
        $this->wishlistItems = $wishlistItems;
    }

    public function calculateTotalAmount()
    {
        $this->totalAmount = array_sum(array_column($this->cartItems, 'price'));
    }

    public function removeCartItem($index)
    {
        array_splice($this->cartItems, $index, 1);
        $this->calculateTotalAmount();
    }

    public function removeWishlistItem($index)
    {
        array_splice($this->wishlistItems, $index, 1);
    }

    public function render()
    {
        return view('livewire.sidebar-cart', [
            'cartItems' => $this->cartItems,
            'wishlistItems' => $this->wishlistItems,
            'totalAmount' => $this->totalAmount,
        ]);
    }
}
