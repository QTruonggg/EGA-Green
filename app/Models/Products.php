<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'product_code',
        'thumbnail_1',
        'thumbnail_2',
        'thumbnail_3',
        'thumbnail_4',
        'category_product_id',
        'old_price',
        'percent_discount',
        'current_price',
        'description',
        'status',
        'seo_keyword',  
        'seo_description',
        'seo_title',
    ];
    public function parent(){
       return $this->belongsTo(Subcategory_products::class);
    }
}
