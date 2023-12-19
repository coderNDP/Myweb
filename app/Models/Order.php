<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'id_customer', 'name', 'phone', 'address', 'note', 'total', 'id_payment', 'updated_time', 'status'];
}
