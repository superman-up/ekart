<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class StudentController extends Controller
{
    public function showStudent(){
     $students = DB::table('students')->get();
     return view("allstudents",['data'=>$students]);
    }

    public function singleStudent(string $id){
        $student = DB::table('students')->where('id',$id)->get();
        return view('student', ['data'=>$student]);
    }
    public function addstudent(Request $request){
       $student = DB::table('students')->insert([
        [
            "name" => $request->name,
            "email"=> $request->email,
            "age" => $request->age,
            "city" => $request->city,
            "phone"=> $request->phone,
            "created_at" => now(),
            "updated_at"=> now()
        ]
       ]);
        

        if($student){
            // echo "<h2> Record Successfully Inserted. </h2>";
            return redirect()->route('records');
        }else{
            echo "<h2>Somting went wrong. </h2>";

        }


    }
    public function updateStudent(string $id, Request $request){
        $student = DB::table("students")->where('id',$id)
                    ->update([
                        "name"=>$request->name,
                        "email"=>$request->email,
                        "age"=>$request->age,
                        "city"=>$request->city,
                        "phone"=> $request->phone
                    ]);
        if($student){
            return redirect()->route('records');
        }else{
            echo "<h2>Record Not Updated.</h2>";
        }

    }
    public function updateStuPage(string $id){
        //$student = DB::table('students')->where('id',$id)->get();
        $student = DB::table('students')->find($id);
        return view("updateStudent",['data'=>$student]);
    }
    public function deleteStudent(string $id){
        $student = DB::table('students')
                    ->where('id',$id)
                    ->delete();
    if($student){
        return redirect()->route('records');
    }else{
    echo "<h2> Record Not deleted.</h2>";
            
    }
    }
    
}
    
