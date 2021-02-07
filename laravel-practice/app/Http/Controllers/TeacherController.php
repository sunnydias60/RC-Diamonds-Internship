<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TeacherController extends Controller
{
    
    public function teacherView(){
        

        return view('teacher');

    }
    public function teacherUpdate(Request $request){
        
        Teacher::create($request->all());      
        return redirect()->back();
}
public function showStudents(){
    
    // $student_display = DB::table('teachers')
    //         ->join('students', 'teachers.class_allocated', '=', 'students.class')
    //         ->join('attendance', 'students.name','=','attendance.student_name')
    //         ->select('students.name','attendance.status')
    //         ->where('students.class',$ab)
    //         ->get();
    // return $student_display;
    $displayALL= Teacher::all('name','id','class_allocated');
               return $displayALL;
}

public function destroy(){
    $ab =  $_GET['class_allocated'];
    Teacher::where('class_allocated', $ab)->delete();
    return redirect()->back();
    
    
}

public function restore(){
    $ab =  $_GET['class_allocated'];
    Teacher::where('class_allocated', $ab)->restore();
    return redirect()->back();
    
    
}
}
