<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Marks;
use App\Student;

class MarksController extends Controller
{
    public function index()
    {
    	$marks = Marks::with('student')->get();
    	//dd($marks);
        return view('marks.index',compact('marks'));
    }
    public function create()
    {
    	$students = Student::all();
    	return view('marks.create',compact('students'));
    }
    public function store(Request $request)
    {
    	$data = request()->validate([
        'student_id' => 'required',
        'term' => 'required',
        'maths' => 'required',
        'science' => 'required',
        'history' => 'required'
        ]);
        
        $save = Marks::create($data);
 
        return back()->with('success','Marks added Successfully');
    }
    public function edit($id)
    {
    	$students = Student::all();
    	$details    = Marks::find($id);
        return view('marks.edit',compact('details','id','students'));
    }
    
    public function updatemarksdata(Request $request,$id)
    {
    	
    	$data = request()->validate([
        'student_id' => 'required',
        'term' => 'required',
        'maths' => 'required',
        'science' => 'required',
        'history' => 'required'
        ]);

        $record = Marks::findOrFail($id);
        $record->student_id = $request->student_id;
        $record->term = $request->term;
        $record->maths = $request->maths;
        $record->science = $request->science;
        $record->history = $request->history;
        $record->save();
        
	    return back()->with('success','Marks updated Successfully');
    	
    }
    public function deletemarksAjax(Request $request)
    {
    	$rid = $request->rid;
		$recordid=Marks::find($rid);
	    if($recordid)
	    {
	        $recordid->delete();
	        echo 1;
	    }else{
	    	echo 2;
	    }
    }
}
