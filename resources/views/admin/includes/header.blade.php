<div class="logo-container">
    <a href="../" class="logo">
        <img src="{{asset('assets/images/logo.png')}}" height="35" alt="Porto Admin" />
    </a>
    <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
    </div>
</div>

<!-- start: search & user box -->
<div class="header-right">

    <div id="userbox" class="userbox">
        @auth
        <a href="#" data-toggle="dropdown">
            <img src="{{asset(Auth::user()->profile->avatar)}}" alt="" width="48px" height="44px" >
            <div class="profile-info" data-lock-name="{{Auth::user()->name}}" data-lock-email="{{Auth::user()->email}}">
                <span class="name">{{ Auth::user()->name }}</span>
                <span class="role">@if(Auth::user()->teacher)Teacher @else Student @endif</span>
            </div>

            <i class="fa custom-caret"></i>
        </a>
        <div class="dropdown-menu">
            <ul class="list-unstyled">
                <li class="divider"></li>

                <li >
                    <a href="{{route('user.profile')}}"> <i class="fa fa-info"></i>  My profile</a>
                </li>

                <li>
                    <a role="menuitem" tabindex="-1" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off"></i>
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>


            </ul>
        </div>
            @endauth
    </div>
</div>