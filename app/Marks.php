<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class Marks extends Model
{
    use SoftDeletes;
    protected $table = 'marks'; 
    protected $fillable = [ 'student_id','maths','science','history','term'];

    public function student()
{
    return $this->hasOne(Student::class, 'id', 'student_id');
}
}
