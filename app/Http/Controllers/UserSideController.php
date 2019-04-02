<?php

namespace App\Http\Controllers;

use App\Material;
use App\Subject;
use Illuminate\Http\Request;

class UserSideController extends Controller
{
    public function courses(){
        return view('userSide.courses')->with('subjects', Subject::all());
    }

    public function course($id){
        $i = 1;
        $subjects = Subject::all();
        $subject = Subject::findOrFail($id);
        $teacher = $subject->teachers->first()->name;
        $count = $subject->teachers->count() - 1;
        $materials = Material::all();
        return view('userSide.course')->with(compact('subject', 'subjects', 'materials', 'i', 'teacher', 'count'));
    }
}
