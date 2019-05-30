<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
    <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
    <div class="search">
        <form action="#" class="header_search_form menu_mm">
            <input type="search" class="search_input menu_mm" placeholder=@lang('userSide.search') required="required">
            <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                <i class="fa fa-search menu_mm" aria-hidden="true"></i>
            </button>
        </form>
    </div>
    <nav class="menu_nav">
        <ul class="menu_mm">
            <li class="menu_mm"> <a href="{{route('user.profile')}}">
                    @if(Auth::user())
                        <img src="{{asset(Auth::user()->profile->avatar)}}" alt="" width="28px" height="24px" class="zaebal">
                    @else
                        <i class="fa fa-user"></i>
                    @endif
                    @lang('userSide.my.profile')
                </a></li>
            <li class="menu_mm"><i class="fa fa-home"></i> <a href="{{route('index')}}">@lang('tables.home')</a></li>
            <li class="menu_mm"><i class="fa fa-book"></i> <a href="{{route('courses')}}">@lang('userSide.courses')</a></li>
            <li class="menu_mm"><i class="fa fa-institution"></i> <a href="{{route('teachers.userSide')}}">@lang('tables.teachers')</a></li>
            <li class="menu_mm"><a href="{{route('quiz.show', ['id' => 2])}}">
                    <i class="fa fa-check"></i> @lang('userSide.pass.character.test')</a></li>
            <li class="menu_mm">@if(!Auth::user())
                    <a href="{{route('login')}}"><i class="fa fa-sign-in"></i> @lang('actions.login')</a>
                @else
                    <a href="#" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off"></i> @lang('actions.logout')</a>
                @endif
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form></li>
            <li class="menu_mm"><img src="{{asset('userSide/images/English.svg')}}" width="28px" height="24px"></i> <a href="{{route('language',['locale' => 'en'])}}">@lang('userSide.en')</a></li>
            <li class="menu_mm"><img src="{{asset('userSide/images/Russian.svg')}}" width="28px" height="24px"> <a href="{{route('language',['locale' => 'ru'])}}">@lang('userSide.ru')</a></li>



        </ul>
    </nav>
    <div class="menu_extra">
        <div class="menu_phone"><span class="menu_title">@lang('userSide.phone'):</span>+77077376257</div>
        <div class="menu_social">
            <span class="menu_title">@lang('userSide.follow')</span>
            <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</div>
