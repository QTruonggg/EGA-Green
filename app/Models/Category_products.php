<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_products extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'parent_id',
        'seo_keyword',
        'seo_description',
        'seo_title',
    ];
    public function childs(){
        return $this->hasMany(Category_products::class ,'parent_id');
    }
}
