<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'subcategory_id',
        'brand_id',
        'admin_id',
        'product_name',
        'product_slug',
        'product_sku',
        'product_model',
        'product_unit',
        'unit_price',
        'best_price',
        'discount',
        'discount_type',
        'stock_quantity',
        'description',
        'thumbnail_image',
        'today_deal',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }



    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }

    public function admin()
    {
        return $this->belongsTo('App\Models\Admin');
    }
}
