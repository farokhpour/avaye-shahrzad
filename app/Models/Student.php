<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'father_name',
        'birth_date',
        'birth_place',
        'education',
        'job',
        'marriage_status',
        'phone_number',
        'mobile_number',
        'address',
    ];
}
