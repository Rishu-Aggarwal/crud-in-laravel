<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function getStudents(){
        $json=DB::table('students')->paginate(3);
        // $students=collect(json_decode($json));
        return view('read',['students'=>$json]);
    }
}
