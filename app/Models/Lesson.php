<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable =[
        'student_id',
        'instrument_id',
        'instructor_id',
        'class_date',
        'status'
    ];

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function instrument(){
        return $this->belongsTo(Instrument::class);
    }

    public function instructor(){
        return $this->belongsTo(Instructor::class);
    }
}
