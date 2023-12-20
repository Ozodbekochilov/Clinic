<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clents extends Model
{
    use HasFactory;

    protected $table = 'clents';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'image',
        'color',
        'price',
    ];

    function get_clent()
    {
        return $this->hasOne(Cars::class, 'id', 'name');
    }
}
