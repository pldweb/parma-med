<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $guarded = ['id'];
    protected $fillable = ['name', 'slug', 'photo', 'price', 'category_id', 'description'];

    public function category() {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

}
