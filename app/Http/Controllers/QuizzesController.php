<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Department;
use App\Question;
use App\Quiz;
use Auth;
use Session;
use App\Subject;
use App\Teacher;
use Illuminate\Http\Request;

class QuizzesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.quizzes.index')->with('quizzes', Quiz::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $subjects = Subject::all();
        return view('admin.quizzes.create')
            ->with('subjects', $subjects);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher = Teacher::where('user_id', Auth::id())->get()->first();
        $this->validate($request, [
            'title' => 'required',
            'subject_id' => 'required',

        ]);

        $quiz = Quiz::create([
            'title' => $request->title,
            'subject_id' => $request->subject_id,
            'teacher_id' => $teacher->id,
        ]);

        $quiz->save();

        Session::flash('success', 'Quiz created successfully!');

        return redirect()->route('quizzes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $i = 1;
        $quiz = Quiz::where('id', $id)->get()->first();

        $questions = Question::where('quiz_id', $quiz->id)->get();

        foreach ($questions as $question) {
            $question->answers = Answer::where('question_id', $question->id)->get();
        }


        return view('admin.quizzes.single')->with(compact('quiz', 'questions', 'i'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quiz = Quiz::findOrFail($id);
        $subjects = Subject::all();
        return view('admin.quizzes.edit', compact('quiz', 'subjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $quiz = Quiz::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:255',
            'subject_id' => 'required'
        ]);
        $quiz->title = $request->title;
        $quiz->subject_id = $request->subject_id;
        $quiz->save();

        Session::flash('success', 'Quiz was successfuly updated');
        return redirect()->route('quizzes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Quiz::destroy($id);

        Session::flash('success', 'Quiz deleted successfuly');

        return redirect()->route('quizzes.index');
    }
}
