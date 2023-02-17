<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoryProducts extends Model
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
        return $this->belongsTo(CategoryProducts::class);
    }
    public function childs(){
        return $this->hasMany(SubCategoryProducts::class ,'category_id');
    }
}
