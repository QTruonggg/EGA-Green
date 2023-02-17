<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory_products extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'seo_keyword',
        'seo_description',
        'seo_title',
    ];
    public function parent(){
        return $this->belongsTo(Category_products::class);
    }
    public function childs(){
        return $this->hasMany(Subcategory_products::class ,'category_id');
    }
}
