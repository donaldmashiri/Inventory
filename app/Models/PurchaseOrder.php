<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'purchase_order_number',
        'supplier_id',
        'order_date',
        'delivery_date',
        'item_name',
        'unit_price',
        'total_price',
    ];
}
