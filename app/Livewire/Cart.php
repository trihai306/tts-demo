<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class Cart extends Component
{
    public $cartItems = [];
    public $totalPrice = 0;

    public function mount()
    {
        $this->cartItems = Session::get('cart', []);
        $this->calculateTotal();
    }

    public function render()
    {
        return view('livewire.cart', [
            'cartItems' => $this->cartItems,
            'totalPrice' => $this->totalPrice,
        ]);
    }

    public function addItem($itemId, $name, $price, $quantity = 1)
    {
        $existingItemIndex = collect($this->cartItems)->search(function ($item) use ($itemId) {
            return $item['id'] === $itemId;
        });

        if ($existingItemIndex !== false) {
            $this->cartItems[$existingItemIndex]['quantity'] += $quantity;
        } else {
            $this->cartItems[] = [
                'id' => $itemId,
                'name' => $name,
                'price' => $price,
                'quantity' => $quantity,
            ];
        }

        Session::put('cart', $this->cartItems);
        $this->calculateTotal();
    }

    public function removeItem($itemId)
    {
        $this->cartItems = collect($this->cartItems)->reject(function ($item) use ($itemId) {
            return $item['id'] === $itemId;
        })->toArray();

        Session::put('cart', $this->cartItems);
        $this->calculateTotal();
    }

    public function updateQuantity($itemId, $quantity)
    {
        $index = collect($this->cartItems)->search(function ($item) use ($itemId) {
            return $item['id'] === $itemId;
        });

        if ($index !== false) {
            $this->cartItems[$index]['quantity'] = $quantity;
        }

        Session::put('cart', $this->cartItems);
        $this->calculateTotal();
    }

    private function calculateTotal()
    {
        $this->totalPrice = collect($this->cartItems)->sum(function ($item) {
            return $item['price'] * $item['quantity'];
        });
    }
}
