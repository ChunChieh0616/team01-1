<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentsController extends Controller
{
    //
    public function index(){
        $students = Student::all();
        return view("students.index",["student"=>$students]);
    }
    public function show($id){
        $student=Student::findOrFail($id);
        return view("students.show",["student"=>$student]);
    }
    public function destroy($id){
        $student=Student::findOrFail($id);
        $student->delete();
        return redirect('students');
    }
    
}
