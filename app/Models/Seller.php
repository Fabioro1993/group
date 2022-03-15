<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'seller';

    protected $fillable = [
        'name',
        'email',
        'phone',
    ];
}
