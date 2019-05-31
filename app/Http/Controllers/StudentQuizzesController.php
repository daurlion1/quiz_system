<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use App\Quiz;
use App\Student;
use App\StudentQuiz;
use App\StudentThemes;
use App\Theme;
use Session;
use Auth;
use App\StudentQuizResult;
use Illuminate\Http\Request;

class StudentQuizzesController extends Controller
{
    public function index()
    {
        return view('admin.test_results.index')->with('test_results', StudentQuiz::all());
    }

    public function show($id)
    {
        $answers = null;
        $result = StudentQuizResult::where('student_quiz_id', $id)->get();
        foreach ($result as $question) {
            $question->answer_id = Answer::findOrFail($question->answer_id);
            $question->answer = Answer::where('question_id', $question->question_id)->get();
        }
        return view('admin.test_results.show')
            ->with('results', $result);
    }

    public function store(Request $request)
    {
        $result = 0;
        $total = 0;
        $student = Student::where('user_id', Auth::id())->get()->first();
        $themes = array();
        $student_quiz = StudentQuiz::create([
            'student_id' => $student->id,
            'quiz_id' => $request->quiz_id,
            'accepted' => 1,
            'total' => $total,
            'result' => $result
        ]);

        foreach ($request->input('questions', []) as $key => $question) {
            $status = 0;
            $question_value = Question::findorFail($question);
            $total += $question_value->question_value;
            if ($request->input('answers.' . $question) != null
                && Answer::find($request->input('answers.' . $question))->right
            ) {
                $status = 1;
                $result += $question_value->question_value;
            }
            $student_quiz_result = StudentQuizResult::create([
                'user_id' => Auth::id(),
                'student_quiz_id' => $student_quiz->id,
                'question_id' => $question,
                'answer_id' => $request->input('answers.' . $question),
                'correct' => $status,
            ]);

        }
        $question_values = array();
        $question_values2 = array();
        if (!$student_quiz->quiz->isPsychological) {
            $quiz_result = $student_quiz_result::where('student_quiz_id', $student_quiz->id)->get();
            foreach ($quiz_result as $result_quiz) {
                $questions[] = $result_quiz->question;
            }
            foreach ($questions as $question) {
                $question_values[] = array(
                    'question_value' => $question->question_value,
                    'theme' => $question->theme->id,
                );
            }
            $result_question_values = array();
            foreach ($question_values as $item) {
                if (isset($result_question_values[$item['theme']])) {
                    $result_question_values[$item['theme']] += $item['question_value'];
                } else {
                    $result_question_values[$item['theme']] = $item['question_value'];
                }
            }

            $themes = Theme::where('subject_id', $student_quiz->quiz->subject->id)->get();
            $getCorrect = StudentQuizResult::where('correct', 1)->where('student_quiz_id', $student_quiz->id)->get();
            foreach ($getCorrect as $result_quiz) {
                $questions2[] = $result_quiz->question;
            }
            foreach ($questions2 as $question) {
                $question_values2[] = array(
                    'question_value' => $question->question_value,
                    'theme' => $question->theme->id,
                );
            }
            $result_question_values2 = array();
            foreach ($question_values2 as $item) {
                if (isset($result_question_values2[$item['theme']])) {
                    $result_question_values2[$item['theme']] += $item['question_value'];
                } else {
                    $result_question_values2[$item['theme']] = $item['question_value'];
                }
            }
            foreach ($result_question_values2 as $key=>$value) {
                $check[$key] = true;
                $check1[$key] = $value;
            }
                foreach ($result_question_values as $key=>$value) {
                    $show = 0;
                    if(isset($check[$key])){
                    if($key==$check[$key]) {
                        $amount_percent =  $check1[$key]/$result_question_values[$key] * 100;
                        if ($amount_percent >= 60) {
                            $show = 1;
                        }
                    }
                    else {
                        $amount_percent = 0;
                    }
                    }
                    StudentThemes::create([
                        'theme_id' => $key,
                        'show' => $show,
                        'student_quiz_id' => $student_quiz->id,
                        'amount_percent' => $amount_percent,
                    ]);

                }

        } else {

            $getCorrect = StudentQuizResult::where('correct', 1)->where('student_quiz_id', $student_quiz->id)->get();
            $audial_count = 0;
            $visual_count = 0;

            foreach ($getCorrect as $getCorrect) {
                $getThemes = $getCorrect->question->theme;
                $themes[] = $getThemes->name;
            }
            $student = Student::where('user_id', Auth::id());
            for ($i = 0; $i < sizeof($themes); $i++) {
                if ($themes[$i] == 'Audial')
                    $audial_count++;
                else $visual_count++;
            }
            if ($audial_count > $visual_count)
                $student->update(['character_type' => 'Audial']);
            else $student->update(['character_type' => 'Visual']);

        }

        $student_quiz->update(['result' => $result]);
        $student_quiz->update(['total' => $total]);
        Session::flash('success', 'Тест пройден!');

        return redirect()->route('index');

    }

    public function results()
    {
        $results = StudentQuiz::all();
        return view('home')->with('results', $results);

    }
}
