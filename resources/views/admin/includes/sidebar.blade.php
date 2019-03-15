@inject('request', 'Illuminate\Http\Request')
<aside id="sidebar-left" class="sidebar-left">
    <div class="sidebar-header">
        <div class="sidebar-title">
            Navigation
        </div>
        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>
    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <li class="{{ $request->segment(1) == 'home' ? 'nav-active' : '' }}">
                        <a href="{{route('home')}}">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="{{$request->segment(1) == 'materials' ? 'nav-active' : ''}}">
                        <a href="{{route('materials.index')}}">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            <span>Materials</span>
                        </a>
                    </li>
                    <li class="{{$request->segment(1) == 'departments' ? 'nav-active' : ''}}">
                        <a href="{{route('departments.index')}}">
                            <i class="fa fa-building-o" aria-hidden="true"></i>
                            <span>Departments</span>
                        </a>
                    </li>
                    <li class="{{$request->segment(1) == 'question_types' ? 'nav-active' : ''}}">
                        <a href="{{route('question_types.index')}}">
                            <i class="fa fa-file" aria-hidden="true"></i>
                            <span>Question types</span>
                        </a>
                    </li>
                    <li class="{{$request->segment(1) == 'teachers' ? 'nav-active' : ''}}">
                        <a href="{{route('teachers.index')}}">
                            <i class="fa fa-university" aria-hidden="true"></i>
                            <span>Teachers</span>
                        </a>
                    </li>
                    <li class="{{$request->segment(1) == 'subjects' ? 'nav-active' : ''}}">
                        <a href="{{route('subjects.index')}}">
                            <i class="fa fa-language" aria-hidden="true"></i>
                            <span>Subjects</span>
                        </a>
                    </li>
                    <li class="{{$request->segment(1) == 'quizzes' ? 'nav-active' : ''}}">
                        <a href="{{route('quizzes.index')}}">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                            <span>Quizzes</span>
                        </a>
                    </li>
                    <li class="{{$request->segment(1) == 'questions' ? 'nav-active' : ''}}">
                        <a href="{{route('questions.index')}}">
                            <i class="fa fa-question-circle" aria-hidden="true"></i>
                            <span>Questions</span>
                        </a>
                    </li>
                    <li class="{{$request->segment(1) == 'answers' ? 'nav-active' : ''}}">
                        <a href="{{route('answers.index')}}">
                            <i class="fa fa-reply" aria-hidden="true"></i>
                            <span>Answers</span>
                        </a>
                    </li>


                </ul>
            </nav>

        </div>

    </div>

</aside>