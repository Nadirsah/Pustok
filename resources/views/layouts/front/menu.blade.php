<div class="col-lg-5">
    <div class="main-navigation flex-lg-right">

        <ul class="main-menu menu-right li-last-0">
            <li class="menu-item has-children">
                <a href="{{route('home')}}">{{$trans->home}} </a>

            </li>
            <!-- Shop -->
            <li class="menu-item has-children mega-menu">
                <a href="{{route('shop')}}">{{$trans->shop}}</a>

            </li>


            <li class="menu-item">
                <a href="{{route('contact')}}">{{$trans->contact}}</a>
            </li>
        </ul>
    </div>
</div>
