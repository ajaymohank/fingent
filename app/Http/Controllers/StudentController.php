<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator,Redirect,Response;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
    	$student = Student::all();
    	return view('student.index',compact('student'));
    }
    public function create()
    {
    	return view('student.create');
    }
    public function store(Request $request)
    {
    	$data = request()->validate([
        'name' => 'required',
        'age' => 'required|numeric',
        'gender' => 'required',
        'reporting_teacher' => 'required'
        ]);
        
        $save = Student::create($data);
 
        return back()->with('success','Students Created Successfully');
    }
    public function edit($id)
    {
    	
    	$details    = Student::find($id);
        return view('student.edit',compact('details','id'));
    }
    
    public function updatestudentdata(Request $request,$id)
    {
    	
    	$data = request()->validate([
        'name' => 'required',
        'age' => 'required|numeric',
        'gender' => 'required',
        'reporting_teacher' => 'required'
        ]);

        $record = Student::find($id);
        $record->name = $request->name;
        $record->age = $request->age;
        $record->gender = $request->gender;
        $record->reporting_teacher = $request->reporting_teacher;
        $record->save();
        
	    return back()->with('success','Students  data updated Successfully');
    	
    }
    public function deletestudent(Request $request)
    {
    	$rid = $request->rid;
		$recordid=Student::find($rid);
	    if($recordid)
	    {
	        $recordid->delete();
	        echo 1;
	    }else{
	    	echo 2;
	    }
      }
}
