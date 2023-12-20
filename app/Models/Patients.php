<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patients extends Model
{
    use HasFactory;

    protected $table = 'patients';



    protected $fillable = [
        'name',
        'doctor_id',
        'deleted_at'
    ];


}
