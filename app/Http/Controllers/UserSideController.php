<?php

namespace App\Http\Controllers;

use App\Material;
use App\Student;
use App\StudentQuiz;
use App\StudentQuizResult;
use App\StudentThemes;
use App\Subject;
use App\Quiz;
use App\Teacher;
use Auth;
use Illuminate\Http\Request;

class UserSideController extends Controller
{
    public function courses(){
        $student = Student::where('user_id', Auth::user()->id)->first();
        $student_quiz = StudentQuiz::where('student_id', $student->id)->orderBy('id','desc')->first();
        if($student_quiz) $check = true;
        else $check = false;
        return view('userSide.courses')->with('subjects', Subject::all())
            ->with('student_quiz', $check);
    }

    public function index(){
        return view('userSide.index')->with('subjects', Subject::where('isPsychological',0)->get())
            ->with('teachers', Teacher::all());
    }

    public function course($id){
        $i = 1;
        $subjects = Subject::all();
        $subject = Subject::findOrFail($id);
        $teacher = $subject->teachers->first()->name;
        $count = $subject->teachers->count() - 1;
        $student = Student::where('user_id', Auth::user()->id)->first();
        $quiz_id = Quiz::where('subject_id',$subject->id)->first()->id;
        $student_quiz_id = StudentQuiz::where('student_id', $student->id)->where('quiz_id',$quiz_id)->orderBy('id','desc')->first()->id;
        $student_themes = StudentThemes::where('student_quiz_id', $student_quiz_id)->get();
        foreach ($student_themes as $student_theme){
            if($student->character_type == 'Audial')
                $materials[] = Material::where('theme_id', $student_theme->theme->id)->where('title', 'Audio')->get();

            else
                $materials[] = Material::where('theme_id', $student_theme->theme->id)->where('title', 'Video')->get();
        }

        return view('userSide.course')->with(compact('subject', 'subjects', 'materials', 'i', 'teacher', 'count','student'));
    }
}
