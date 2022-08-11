<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
      'subject_name',
      'SID'
    ];

    public function grades()
    {
        return $this->belongsToMany(Grade::class,'grade_subject' , 'subject_id' , 'grade_number');
    }
}
