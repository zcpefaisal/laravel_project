<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student_info extends Model
{
    //
    protected $table="student_info";
    protected $fillable=['name','email'];
    protected $primaryKey = 'student_id';
}
