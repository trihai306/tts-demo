<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
}
