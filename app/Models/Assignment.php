<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'assignment_file', 'due_date', 'description'];

    public function students()
    {
        return $this->belongsToMany(User::whereRoleId(Role::IS_STUDENT)->all(), 'assignment_user', 'assignment_id' , 'user_id')
            ->withTimestamps()
            ->withPivot(['submitted' , 'remarks']);
    }

    public function teachers()
    {
        return $this->belongsToMany(User::whereRoleId(Role::IS_TEACHER)->all() , 'assignment_user' , 'assignment_id' , 'user_id')
            ->withTimestamps()
            ->withPivot(['submitted' , 'remarks']);
    }
}
