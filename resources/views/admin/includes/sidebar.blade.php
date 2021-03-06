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
                            <span>@lang('tables.home')</span>
                        </a>
                    </li>
                    <li class="{{$request->segment(1) == 'materials' ? 'nav-active' : ''}}">
                        <a href="{{route('materials.index')}}">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            <span>@lang('tables.materials')</span>
                        </a>
                    </li>
                    <li class="{{$request->segment(1) == 'departments' ? 'nav-active' : ''}}">
                        <a href="{{route('departments.index')}}">
                            <i class="fa fa-building-o" aria-hidden="true"></i>
                            <span>@lang('tables.departments')</span>
                        </a>
                    </li>
                    <li class="{{$request->segment(1) == 'teachers' ? 'nav-active' : ''}}">
                        <a href="{{route('teachers.index')}}">
                            <i class="fa fa-university" aria-hidden="true"></i>
                            <span>@lang('tables.teachers')</span>
                        </a>
                    </li>
                    <li class="{{$request->segment(1) == 'subjects' ? 'nav-active' : ''}}">
                        <a href="{{route('subjects.index')}}">
                            <i class="fa fa-language" aria-hidden="true"></i>
                            <span>@lang('tables.subjects')</span>
                        </a>
                    </li>
                    <li class="{{$request->segment(1) == 'quizzes' ? 'nav-active' : ''}}">
                        <a href="{{route('quizzes.index')}}">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                            <span>@lang('tables.quizzes')</span>
                        </a>
                    </li>
                    <li class="{{$request->segment(1) == 'questions' ? 'nav-active' : ''}}">
                        <a href="{{route('questions.index')}}">
                            <i class="fa fa-question-circle" aria-hidden="true"></i>
                            <span>@lang('tables.questions')</span>
                        </a>
                    </li>
                    <li class="{{$request->segment(1) == 'themes' ? 'nav-active' : ''}}">
                        <a href="{{route('themes.index')}}">
                            <i class="fa fa-file" aria-hidden="true"></i>
                            <span>@lang('tables.themes')</span>
                        </a>
                    </li>
                    <li class="{{$request->segment(1) == 'answers' ? 'nav-active' : ''}}">
                        <a href="{{route('answers.index')}}">
                            <i class="fa fa-reply" aria-hidden="true"></i>
                            <span>@lang('tables.answers')</span>
                        </a>
                    </li>
                    <li class="{{$request->segment(1) == 'settings' ? 'nav-active' : ''}}">
                        <a href="{{route('settings.index')}}">
                            <i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
                            <span class="sr-only">Loading...</span>
                            <span>@lang('tables.settings')</span>
                        </a>
                    </li>
                    <li class="{{$request->segment(1) == 'results' ? 'nav-active' : ''}}">
                        <a href="{{route('student.quizzes')}}">
                            <i class="fa fa-check " aria-hidden="true"></i>
                            <span>@lang('tables.test.results')</span>
                        </a>
                    </li>
                    {{--<li class="{{$request->segment(1) == 'asd' ? 'nav-active' : ''}}">--}}
                        {{--<a href="{{route('student.results')}}">--}}
                            {{--<i class="fa fa-reply" aria-hidden="true"></i>--}}
                            {{--<span>Answers</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}





                </ul>
            </nav>

        </div>

    </div>

</aside>