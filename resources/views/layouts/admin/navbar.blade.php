<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.html"><img src="{{asset('admin')}}/global_assets\images\logo_light.png" alt=""></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
            <li class="dropdown">
                <div class="dropdown-menu dropdown-content">
                    <div class="dropdown-content-footer">
                        <a href="#" data-popup="tooltip" title="All activity"><i class="icon-menu display-block"></i></a>
                    </div>
                </div>
            </li>
        </ul>



        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <span>{{Auth::user()->name}}</span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                    <li><a href="#"><i class="icon-coins"></i> My balance</a></li>
                    <li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
                    <li class="divider"></li>
                    <li><a href="{{route('user.index')}}"><i class="icon-cog5"></i> Istifadeci ayarlari</a></li>
                    <li><a href="{{route('logout')}}"><i class="icon-switch2"></i> Cixis</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
