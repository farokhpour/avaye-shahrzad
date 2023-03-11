<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
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

    public function user(){
        return $this->morphOne(User::class, 'userable');
    }
}
