<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_product';
    protected $fillable = ['id_product', 'name', 'img', 'id_brand', 'id_category', 'price', 'sale_price', 'Des'];
}
