<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StudentUpdate;

class StudentController extends Controller
{
    public function studentView(){
        return view('student');    
    }


    public function studentUpdate(StudentUpdate $request){
        
        Student::create($request->all());
        
        return redirect()->back();
}
public function showTeachers(){
    $abc =  $_GET['class'];
    $teacher_display = DB::table('students')
            ->join('teachers', 'students.class', '=', 'teachers.class_allocated')
            ->select('teachers.name')
            ->where('teachers.class_allocated',$abc)
            ->groupBy('teachers.name')
            ->get();
    return $teacher_display;
}
}