<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone_number',
        'mobile_number',
    ];

    public function user(){
        return $this->morphOne(User::class, 'userable');
    }

}
