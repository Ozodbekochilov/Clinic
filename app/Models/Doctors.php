<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    use HasFactory;

    protected $table = 'doctors';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'deleted_at',
    ];


    
    function get_clents()
    {
        return $this->hasOne(Patients::class, 'doctor_id', 'id');
    }

}
