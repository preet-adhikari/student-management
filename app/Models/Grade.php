<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Grade extends Model
{
    use HasFactory;

    public function subjects(): BelongsToMany
    {
        return $this->belongsToMany(Subject::class , 'grade_subject' , 'grade_number' , 'subject_id')->withTimestamps();
    }

    public function users(){
        return $this->belongsToMany(User::class , 'grade_user' , 'grade_number' , 'user_id')->withTimestamps();
    }
}
