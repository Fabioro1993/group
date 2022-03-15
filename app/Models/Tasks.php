<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tasks';

    protected $fillable = [
        'description',
        'author_id',
        'user_id',
        'date_max',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function author()
    {
        return $this->hasOne(User::class, 'id', 'author_id');
    }

    public function logs()
    {
        return $this->hasMany(Logs::class, 'tasks_id');
    }

    public function getColorAttribute()
    {
        $step = 'black';
        if ($this->date_max < Carbon::now()) {
            $step = 'red';
        }
        return $step;
    }
}
