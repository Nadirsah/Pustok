<div class="sidebar sidebar-main">
    <div class="sidebar-content">
        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="{{asset('admin')}}/global_assets\images\demo\users\face11.jpg" class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold">Victoria Baker</span>
                        <div class="text-size-mini text-muted">
                            <i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
                        </div>
                    </div>

                    <div class="media-right media-middle">
                        <ul class="icons-list">
                            <li>
                                <a href="#"><i class="icon-cog3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    <!-- Main -->
                    <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                    <li class="{{Route::is('dashboard') ? 'active' : ''}}"><a href="{{route('dashboard')}}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                    <li class="{{Request::segment(2)==='product' ? 'active' : ''}}"><a href="{{route('product.index')}}"><i class="icon-home4"></i> <span>Mehsullar</span></a></li>
                    <li class="{{Request::segment(2)==='category' ? 'active' : ''}}"><a href="{{route('category.index')}}"><i class="icon-home4"></i> <span>Categoriya</span></a></li>
                    <li class="{{Request::segment(2)==='lang' ? 'active' : ''}}"><a href="{{route('lang.index')}}"><i class="icon-home4"></i> <span>Dil</span></a></li>
                    <li class="{{Request::segment(2)==='trans_home' ? 'active' : ''}}"><a href="{{route('trans_home.index')}}"><i class="icon-home4"></i> <span>Esas sehife tercume</span></a></li>
                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
