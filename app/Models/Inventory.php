<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_name',
        'item_description',
        'item_category',
        'item_code',
        'item_quantity',
        'status',
    ];

    public function requisitions()
    {
        return $this->hasMany(Requisition::class, 'item_id');
    }

}
