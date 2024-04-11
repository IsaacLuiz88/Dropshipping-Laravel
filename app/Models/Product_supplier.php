<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'product_id',
        'supplier_id',
        'wholesale_price',
    ];

    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
