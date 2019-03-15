<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use App\Quiz;
use App\Student;
use App\StudentQuiz;
use Session;
use Auth;
use App\StudentQuizResult;
use Illuminate\Http\Request;

class StudentQuizzesController extends Controller
{
    public function store(Request $request){
        $result = 0;
        $student = Student::where('user_id', Auth::id())->get()->first();

        $student_quiz = StudentQuiz::create([
            'student_id' => $student->id,
            'quiz_id' => $request->quiz_id,
            'accepted' => 1,
            'result' => $result
        ]);

        foreach ($request->input('questions', []) as $key => $question) {
            $status = 0;
            $question_value = Question::findorFail($question);

            if ($request->input('answers.'.$question) != null
                && Answer::find($request->input('answers.'.$question))->right
            ) {
                $status = 1;
                $result += $question_value->question_value;
            }
            StudentQuizResult::create([
                'user_id'     => Auth::id(),
                'student_quiz_id'     => $student_quiz->id,
                'question_id' => $question,
                'answer_id'   => $request->input('answers.'.$question),
                'correct'     => $status,
            ]);

        }

        $student_quiz->update(['result' => $result]);
        Session::flash('success', 'Тест пройден!');

        return redirect()->route('quizzes.index');

    }

    public function results(){
        $results = StudentQuiz::all();
        return view('home')->with('results', $results);

    }
}
