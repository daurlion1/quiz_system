<!-- Top Bar -->
<div class="top_bar">
    <div class="top_bar_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                        <div class="top_bar_phone"><span class="top_bar_title">@lang('userSide.phone'):</span>+7077376257</div>
                        <div class="top_bar_right ml-auto">

                            <!-- Language -->
                            <div class="top_bar_lang">
                                <span class="top_bar_title">@lang('userSide.web.language'):</span>
                                <ul class="lang_list">
                                    <li class="hassubs">
                                        @if(App::getLocale()=='en')
                                        <a href="{{route('language',['locale' => 'en'])}}"><img src="{{asset('userSide/images/English.svg')}}" width="32px" height="28px"> @lang('userSide.en')<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul>
                                            <li><a href="{{route('language',['locale' => 'ru'])}}"> <img src="{{asset('userSide/images/Russian.svg')}}" width="32" height="28"> @lang('userSide.ru')</a></li>
                                        </ul>
                                            @else
                                            <a href="{{route('language',['locale' => 'ru'])}}">
                                                <img src="{{asset('userSide/images/Russian.svg')}}" width="32px" height="28px">
                                                @lang('userSide.ru')<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="{{route('language',['locale' => 'en'])}}"><img src="{{asset('userSide/images/English.svg')}}" width="32px" height="28px"> @lang('userSide.en')</a></li>
                                            </ul>
                                            @endif
                                    </li>
                                </ul>
                            </div>

                            <!-- Social -->
                            <div class="top_bar_social">
                                <span class="top_bar_title social_title">@lang('userSide.follow')</span>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Header Content -->
<div class="header_container">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header_content d-flex flex-row align-items-center justify-content-start">
                    <div class="logo_container mr-auto">
                        <a href="#">
                            <div class="logo_text"><a href="{{route('index')}}"><img src="{{asset('assets/images/logo.png')}}" width="50px" height="44px"></a>
                                </div>
                        </a>
                    </div>
                    <nav class="main_nav_contaner">
                        <ul class="main_nav">
                            <li><a href="{{route('index')}}">@lang('tables.home')</a></li>
                            <li><a href="{{route('courses')}}">@lang('userSide.courses')</a></li>
                            <li><a href="{{route('teachers.userSide')}}">@lang('tables.teachers')</a></li>
                            {{--<li><a href="{{route('contacts')}}">Contact</a></li>--}}
                        </ul>
                    </nav>
                    <div class="header_content_right ml-auto text-right">
                        <div class="header_search">
                            <div class="search_form_container">
                                <form action="#" id="search_form" class="search_form trans_400">
                                    <input type="search" class="header_search_input trans_400" placeholder=@lang('userSide.search') required="required">
                                    <div class="search_button">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <a href="#" data-toggle="dropdown"><div class="user">
                                @if(Auth::user())
                                    <img src="{{asset(Auth::user()->profile->avatar)}}" alt="" width="48px" height="44px" class="zaebal">
                                    @else
                                    <i class="fa fa-user"></i>
                                    @endif
                            </div></a>
                        <div class="dropdown-menu">
                            <ul class="main_nav">
                                <li><a class="dropdown-item" href="{{route('user.profile')}}"><i class="fa fa-user"></i> @lang('userSide.my.profile')</a></li>
                                <li><a class="dropdown-item" href="{{route('quiz.show', ['id' => 2])}}">
                                        <i class="fa fa-check"></i> @lang('userSide.pass.character.test')</a></li>
                                <li>@if(!Auth::user())
                                        <a class="dropdown-item" href="{{route('login')}}"><i class="fa fa-sign-in"></i> @lang('actions.login')</a>
                                    @else
                                        <a class="dropdown-item" href="#" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <i class="fa fa-power-off"></i> @lang('actions.logout')</a>
                                    @endif
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="hamburger menu_mm">
                            <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>