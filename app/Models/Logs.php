<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    use HasFactory;

    protected $table = 'logs';

    protected $fillable = [
        'tasks_id',
        'commentary',
        'date',
    ];

    public function tasks()
    {
        return $this->hasOne(Tasks::class, 'id', 'tasks_id');
    }
}
