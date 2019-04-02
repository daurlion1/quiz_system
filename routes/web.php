<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'StudentQuizzesController@results')->name('home');
Route::get('/index', function () {
    return view('userSide.index');
})->name('index');
Route::get('/courses', 'UserSideController@courses')->name('courses');

Route::get('/departments', ['uses' => 'DepartmentsController@index', 'as' => 'departments.index' ]);
Route::get('/department/create', ['uses' => 'DepartmentsController@create', 'as' => 'department.create']);
Route::post('/department/store',['uses' => 'DepartmentsController@store', 'as' => 'department.store']);
Route::get('/department/edit/{id}',['uses' => 'DepartmentsController@edit', 'as' => 'department.edit']);
Route::post('/department/update/{id}',['uses' => 'DepartmentsController@update', 'as' => 'department.update']);
Route::delete('/department/delete/{id}',['uses' => 'DepartmentsController@destroy', 'as' => 'department.delete']);


Route::get('/materials', ['uses' => 'MaterialsController@index', 'as' => 'materials.index' ]);
Route::get('/materials/create', ['uses' => 'MaterialsController@create', 'as' => 'material.create']);
Route::post('/materials/store',['uses' => 'MaterialsController@store', 'as' => 'material.store']);
Route::get('/material/edit/{id}',['uses' => 'MaterialsController@edit', 'as' => 'material.edit']);
Route::post('/material/update/{id}',['uses' => 'MaterialsController@update', 'as' => 'material.update']);
Route::delete('/material/delete/{id}',['uses' => 'MaterialsController@destroy', 'as' => 'material.delete']);

Route::get('question_types',['uses' => 'QuestionTypesController@index', 'as' => 'question_types.index']);
Route::get('question_types/create',['uses' => 'QuestionTypesController@create', 'as' => 'question_type.create']);
Route::post('question_types/store',['uses' => 'QuestionTypesController@store','as' => 'question_type.store']);
Route::get('question_types/edit/{id}',['uses' => 'QuestionTypesController@edit', 'as' => 'question_type.edit']);
Route::post('question_types/update/{id}', ['uses' => 'QuestionTypesController@update', 'as' => 'question_type.update']);
Route::delete('question_types/delete/{id}',['uses' => 'QuestionTypesController@destroy', 'as' => 'question_type.delete']);

Route::get('/teachers', ['uses' => 'TeachersController@index', 'as' => 'teachers.index']);
Route::get('/teachers/create', ['uses' => 'TeachersController@create', 'as' => 'teacher.create']);
Route::post('/teachers/store', ['uses' => 'TeachersController@store', 'as' => 'teacher.store']);
Route::get('/teacher/edit/{id}', ['uses' => 'TeachersController@edit', 'as' => 'teacher.edit']);
Route::post('/teacher/update/{id}', ['uses' => 'TeachersController@update', 'as' => 'teacher.update']);
Route::delete('/teacher/delete/{id}',['uses' => 'TeachersController@destroy', 'as' => 'teacher.delete']);


Route::get('/subjects', ['uses' => 'SubjectsController@index', 'as' => 'subjects.index']);
Route::get('/subject/create', ['uses' => 'SubjectsController@create', 'as' => 'subject.create']);
Route::post('/subject/store', ['uses' => 'SubjectsController@store', 'as' => 'subject.store']);
Route::get('/subject/edit/{id}', ['uses' => 'SubjectsController@edit', 'as' => 'subject.edit']);
Route::post('/subject/update/{id}', ['uses' => 'SubjectsController@update', 'as' => 'subject.update']);
Route::delete('/subject/delete/{id}',['uses' => 'SubjectsController@destroy', 'as' => 'subject.delete']);

Route::get('/quizzes', ['uses' => 'QuizzesController@index', 'as' => 'quizzes.index']);
Route::get('/quiz/create', ['uses' => 'QuizzesController@create', 'as' => 'quiz.create']);
Route::post('/quiz/store', ['uses' => 'QuizzesController@store', 'as' => 'quiz.store']);
Route::get('/quiz/edit/{id}', ['uses' => 'QuizzesController@edit', 'as' => 'quiz.edit']);
Route::post('/quiz/update/{id}', ['uses' => 'QuizzesController@update', 'as' => 'quiz.update']);
Route::delete('/quiz/delete/{id}',['uses' => 'QuizzesController@destroy', 'as' => 'quiz.delete']);
Route::get('/quiz/show/{id}',['uses' => 'QuizzesController@show', 'as' => 'quiz.show']);



Route::get('/questions', ['uses' => 'QuestionsController@index', 'as' => 'questions.index']);
Route::get('/questions/create', ['uses' => 'QuestionsController@create', 'as' => 'question.create']);
Route::post('/questions/store', ['uses' => 'QuestionsController@store', 'as' => 'question.store']);
Route::get('/question/edit/{id}', ['uses' => 'QuestionsController@edit', 'as' => 'question.edit']);
Route::post('/question/update/{id}', ['uses' => 'QuestionsController@update', 'as' => 'question.update']);
Route::delete('/question/delete/{id}',['uses' => 'QuestionsController@destroy', 'as' => 'question.delete']);


Route::get('/answers', ['uses' => 'AnswersController@index', 'as' => 'answers.index']);
Route::get('/answers/create', ['uses' => 'AnswersController@create', 'as' => 'answer.create']);
Route::post('/answers/store', ['uses' => 'AnswersController@store', 'as' => 'answer.store']);
Route::get('/answer/edit/{id}', ['uses' => 'AnswersController@edit', 'as' => 'answer.edit']);
Route::post('/answer/update/{id}', ['uses' => 'AnswersController@update', 'as' => 'answer.update']);
Route::delete('/answer/delete/{id}',['uses' => 'AnswersController@destroy', 'as' => 'answer.delete']);


Route::get('/themes', ['uses' => 'ThemesController@index', 'as' => 'themes.index']);
Route::get('/themes/create', ['uses' => 'ThemesController@create', 'as' => 'themes.create']);
Route::post('/themes/store', ['uses' => 'ThemesController@store', 'as' => 'theme.store']);
Route::get('/theme/edit/{id}', ['uses' => 'ThemesController@edit', 'as' => 'theme.edit']);
Route::post('/themeupdate/{id}', ['uses' => 'ThemesController@update', 'as' => 'theme.update']);
Route::delete('/theme/delete/{id}',['uses' => 'ThemesController@destroy', 'as' => 'theme.delete']);

Route::post('/student/quiz/store', ['uses' => 'StudentQuizzesController@store', 'as' => 'student.quiz.store']);


Route::get('/course/{id}', ['uses' => 'UserSideController@course', 'as' => 'userSide.course']);
