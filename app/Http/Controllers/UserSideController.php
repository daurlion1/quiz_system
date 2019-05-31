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
use Session;
use DB;
use Illuminate\Http\Request;

class UserSideController extends Controller
{
    public function courses(){
        if(Auth::user()){
        $student = Student::where('user_id', Auth::user()->id)->first();
        $student_quiz = null;
        if(Auth::user()->student){
            $student_quiz = StudentQuiz::where('student_id', $student->id)->orderBy('id','desc')->first();
        }
        if($student_quiz) $check = true;
        else $check = false;
        return view('userSide.courses')->with('subjects', Subject::all())
            ->with('student_quiz', $check);}
        else {
            Session::flash('info', 'First u must login');
            return redirect()->back();
        }
    }

    public function index(){

        return view('userSide.index')->with('subjects', Subject::where('isPsychological',0)->get())
            ->with('teachers', Teacher::all());
    }

    public function course($id){
        if(!Auth::user()->student){
            Session::flash('error','You must be student to get this page');
            return redirect()->back();
        }
        else{
            $i = 1;
            $subjects = Subject::all();
            $subject = Subject::findOrFail($id);
            $teacher = $subject->teachers->first()->name;
            $count = $subject->teachers->count() - 1;
            $student = Student::where('user_id', Auth::user()->id)->first();
            $quiz_id = Quiz::where('subject_id',$subject->id)->first()->id;
            $student_quiz_id = StudentQuiz::where('student_id', $student->id)->where('quiz_id',$quiz_id)->orderBy('id','desc')->first()->id;
//            $student_themes = StudentThemes::where('student_quiz_id', $student_quiz_id)->get();
            DB::table('student_themes')
                ->join('themes', 'student_themes.theme_id', '=', 'themes.id')
                ->where('student_quiz_id', $student_quiz_id)
                ->orderBy('themes.order', 'asc')
                ->get();
            if(Auth::user()->profile->show_themes == 1)
//                $student_themes = StudentThemes::where('student_quiz_id', $student_quiz_id)->where('show', 0)->get();
            $student_themes = DB::table('student_themes')
                ->join('themes', 'student_themes.theme_id', '=', 'themes.id')
                ->where('student_quiz_id', $student_quiz_id)
                ->where('show', 0)
                ->orderBy('themes.order', 'asc')
                ->get();
            foreach ($student_themes as $student_theme){
                if($student->character_type == 'Audial')
                    $materials[] = Material::where('theme_id', $student_theme->theme_id)->where('title', '!=', 'Video')->get();

                else
                    $materials[] = Material::where('theme_id', $student_theme->theme_id)->where('title', '!=', 'Audio')->get();
            }

            return view('userSide.course')
                ->with(compact('subject', 'subjects', 'materials', 'i', 'teacher', 'count','student'));}

    }

    public function teachers(){
        return view('userSide.teachers')
            ->with('teachers', Teacher::all());
    }
}
