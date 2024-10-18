<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function shop(Request $request)
    {

        if ($request->ajax()) {

            $query = Product::query();

            if ($request->has('search') && $request->search != '') {
                $query->where('name', 'LIKE', '%' . $request->search . '%');
            }

            if ($request->has('min_price') && $request->min_price != '') {
                $query->where('price', '>=', $request->min_price);
            }

            if ($request->has('max_price') && $request->max_price != '') {
                $query->where('price', '<=', $request->max_price);
            }

            if ($request->has('brand') && $request->brand != '') {
                $query->where('id_brand', $request->brand);
            }

            if ($request->has('categories') && is_array($request->categories)) {
                $query->whereIn('id', function($query) use ($request) {
                    $query->select('product_id')
                        ->from('category_product')
                        ->whereIn('category_id', $request->categories);
                });
            }


            if ($request->has('attributes_size') && is_array($request->attributes_size)) {
                foreach ($request->attributes_size as $attributeName => $attributeValues) {
                    $query->whereIn('id', function ($query) use ($attributeName, $attributeValues) {
                        $query->select('product_id')
                            ->from('product_attributes')
                            ->whereIn('value', $attributeValues)
                            ->where('attribute_id', function ($subQuery) use ($attributeName) {
                                $subQuery->select('id')
                                    ->from('attributes')
                                    ->where('name', $attributeName);
                            });
                    });
                }
            }

            $products =  $query->paginate(12)->appends($request->all());

            return response()->json([
                'products' => view('screen.client.partials.product_list', compact('products'))->render(),
                'next_page_url' => $products->nextPageUrl(),
            ]);
        }

        $categories = Category::query()->select('id', 'name')->get();
        $products = Product::paginate(12)->appends($request->all());
        $minPrice = Product::min('price');
        $maxPrice = Product::max('price');

        return view('screen.client.shop.index', compact('products', 'categories', 'minPrice', 'maxPrice'));

    }

    public function showSizesWithProductCount()
    {
        $sizes = DB::table('product_attributes')
            ->select('value as size', DB::raw('COUNT(product_id) as product_count'))
            ->where('attribute_id', function($query) {
                $query->select('id')
                    ->from('attributes')
                    ->where('name', 'Size');
            })
            ->groupBy('value')
            ->get();

        return response()->json($sizes);
    }


    public function getFeaturedProducts(Request $request)
    {
        return response()->json([
            'products' => Product::orderBy('created_at', 'desc')->take(3)->get(),
        ]);
    }

    public function getCartProducts(Request $request)
    {
        $cart = $request->input('cart');

        if (!$cart) {
            return response()->json([
                'success' => true,
                'products' => [],
            ]);
        }

        $productIds = array_column($cart, 'id');
        $products = Product::whereIn('id', $productIds)->get();
        return response()->json([
            'success' => true,
            'products' => $products
        ]);
    }

    public function checkout(Request $request)
    {
        return view('screen.client.checkout.checkout');
    }

    public function postCheckout(CheckoutRequest $request)
    {
            DB::beginTransaction();

            try {

                $totalAmount = 0;

                foreach ($request->products as $cartProduct) {
                    $product = Product::find($cartProduct['id']);

                    if (!$product) {
                        return response()->json(['error' => 'Failed to create order', 'message' => $e->getMessage()], 400);
                    }

                    $price = $product->price;
                    if ($product->special_price && $product->special_price_from <= Carbon::now() && $product->special_price_to >= Carbon::now()) {
                        $price = $product->special_price;
                    }

                    $totalAmount += $price * $cartProduct['quantity'];
                }

                $order = Order::create([
                    'user_id' => 1,
                    'firstname' => $request->firstname,
                    'lastname' => $request->lastname,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'total_amount' => $totalAmount,
                    'status' => 1,
                    'payment_method' => $request->payment_method,
                    'shipping_address' => 1,
                    'billing_address' => 1,
                    'order_date' => now()
                ]);

                foreach ($request->products as $cartProduct) {
                    $product = Product::findOrFail($cartProduct['id']);

                    $price = $product->price;
                    if ($product->special_price && $product->special_price_from <= Carbon::now() && $product->special_price_to >= Carbon::now()) {
                        $price = $product->special_price;
                    }

                    $order->products()->attach($product->id, [
                        'quantity' => $cartProduct['quantity'],
                        'price' => $price * $cartProduct['quantity'],  // Giá nhân số lượng
                    ]);
                }
                DB::commit();

                return $this->sendSuccess('', 200, 'Order created successfully');

            } catch (\Exception $e) {
                DB::rollBack();
                Log::error("Error checkout: " . $e->getMessage());
                return $this->sendError('', 400, "Failed to create order");
            }
    }
}
