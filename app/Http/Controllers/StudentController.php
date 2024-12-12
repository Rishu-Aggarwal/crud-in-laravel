<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function getStudents(){
        $json=DB::table('students')->paginate(3);
        return view('read',['students'=>$json]);
    }
    public function insertStudent(Request $req){
        // return $req;
        $student=DB::table('students')->insert([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>$req->password,
            'conform-password'=>$req->conformPassword,
            'age'=>(int)$req->age,
            'mobile'=>$req->mobile
        ]);
        if($student){
           return redirect()->route('read');
        }else{
            echo "<h1>Student Not added</h1>";
        }
    }
}
