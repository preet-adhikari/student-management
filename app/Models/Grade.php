<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    public function subjects()
    {
        return $this->belongsToMany(Subject::class , 'grade_subject' , 'grade_number' , 'subject_id')->withTimestamps();
    }
}
