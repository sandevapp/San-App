<div class="ui secondary fixed pointing menu m-t-5">
    <a class="item">Learn</a>
    <a class="item">Discuss</a>
    <a class="item">Share</a>
    <a class="item">Downloads</a>
@guest
    <div class="right menu">
        <a href="{{route('login')}}" class="ui item">Login</a>
        <a href="{{route('register')}}" class="ui item">Register</a>
    </div>
@else
   <div class="ui container">
        <div class="dropdown is-right is-hoverable navbar-end">
            <div class="dropdown-trigger m-r-10">
                <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4" style="border: none;">
                    <img class="ui avatar image m-r-15" src="/images/vendor/semantic-ui/dist/themes/default/flags.png">
                    <span class="has-text-weight-light">{{Auth::user()->name}}</span>
                    <span class="icon is-small">
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </span>
                </button>
            </div>
            <div class="dropdown-menu m-r-10" id="dropdown-menu4" role="menu">
                <div class="dropdown-content">
                    <a href="#" class="dropdown-item is-size-6">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        <span class="m-l-10">Profile</span>
                    </a>
                    <a href="#" class="dropdown-item is-size-6">
                        <i class="fa fa-bell" aria-hidden="true"></i>
                        <span class="m-l-10">Notification</span>
                    </a>
                    <a href="{{route('manage.dashboard')}}" class="dropdown-item is-size-6 ">
                        <i class="fa fa-line-chart" aria-hidden="true"></i>
                        <span class="m-l-10">Manage</span>
                    </a>
                    <a href="#" class="dropdown-item is-size-6">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                        <span class="m-l-10">Setting</span>
                    </a>
                    <div class="ui divider m-l-5 m-r-5"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item is-size-6" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        <span class="m-l-10">Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
