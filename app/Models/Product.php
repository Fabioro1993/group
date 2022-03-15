<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = [
        'invoice_id',
        'name',
        'quantity',
        'price',
    ];

    public function invoice()
    {
        return $this->hasOne(Invoice::class, 'id', 'invoice_id');
    }

    public function getPriceProductsAttribute()
    {
        $step = $this->quantity*$this->price;
        return $step;
    }
}