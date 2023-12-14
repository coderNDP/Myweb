<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['id_product', 'name', 'img', 'id_brand', 'id_category', 'price', 'sale_price', 'Des'];
}
