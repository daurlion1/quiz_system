<!-- Top Bar -->
<div class="top_bar">
    <div class="top_bar_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                        <div class="top_bar_phone"><span class="top_bar_title">phone:</span>+7077376257</div>
                        <div class="top_bar_right ml-auto">

                            <!-- Language -->
                            <div class="top_bar_lang">
                                <span class="top_bar_title">site language:</span>
                                <ul class="lang_list">
                                    <li class="hassubs">
                                        <a href="#">English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul>
                                            <li><a href="#">Russian</a></li>
                                            <li><a href="#">Kazakh</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <!-- Social -->
                            <div class="top_bar_social">
                                <span class="top_bar_title social_title">follow us</span>
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
                            <div class="logo_text">ELT</div>
                        </a>
                    </div>
                    <nav class="main_nav_contaner">
                        <ul class="main_nav">
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li><a href="{{route('courses')}}">Courses</a></li>
                            {{--<li><a href="{{route('teachers')}}">Teachers</a></li>--}}
                            {{--<li><a href="{{route('contacts')}}">Contact</a></li>--}}
                        </ul>
                    </nav>
                    <div class="header_content_right ml-auto text-right">
                        <div class="header_search">
                            <div class="search_form_container">
                                <form action="#" id="search_form" class="search_form trans_400">
                                    <input type="search" class="header_search_input trans_400" placeholder="Type for Search" required="required">
                                    <div class="search_button">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Hamburger -->

                        <a href="{{route('login')}}"><div class="user"><i class="fa fa-user" aria-hidden="true"></i></div></a>
                        <div class="hamburger menu_mm">
                            <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>