<?php

namespace App\Models;

use Adminftr\Core\Http\Models\FileManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'url_key',
        'sku',
        'tax_category',
        'id_brand',
        'short_description',
        'description',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'price',
        'special_price',
        'special_price_from',
        'special_price_to',
        'quantity',
        'length',
        'width',
        'height',
        'weight',
        'status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'price' => 'decimal:2',
        'special_price' => 'decimal:2',
        'special_price_from' => 'date',
        'special_price_to' => 'date',
        'status' => 'boolean'
    ];

    /**
     * Get the status as an active or inactive label.
     *
     * @return string
     */
    public function getStatusLabelAttribute()
    {
        return $this->status ? 'Active' : 'Inactive';
    }

    /**
     * Get the product media associated with the product.
     */
    public function images()
    {
        return $this->belongsToMany(FileManager::class, 'product_file_manager', 'product_id', 'file_manager_id');
    }

    public function image()
    {
        return $this->images()->first();
    }
    /**
     * Get the related products for the product.
     */
    public function relatedProducts(){
        return $this->belongsToMany(Product::class, 'product_related', 'product_id', 'related_product_id');
    }

    /**
     * Get the attributes for the product.
     */
    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'product_attributes')
            ->withPivot('value');
    }

    /**
     * Get the categories for the product.
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }

    /**
     * Get the brand that owns the product.
     */
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

}
