<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Database\Eloquent\SoftDeletes;


class Student extends Model
{
    use SoftDeletes;
    protected $table = 'students'; 
    protected $fillable = [ 'name','gender','age','reporting_teacher'];


   public function marks()
    {
        return $this->belongsTo(Marks::class,'student_id');
    }
    
}
