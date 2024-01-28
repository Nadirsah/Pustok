<div class="sidebar sidebar-main">
    <div class="sidebar-content">
        <!-- User menu -->

        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    <!-- Main -->
                    <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                    <li class="{{Route::is('dashboard') ? 'active' : ''}}"><a href="{{route('dashboard')}}"><i
                                class="icon-home4"></i> <span>Dashboard</span></a></li>
                    <li class="{{Request::segment(2)==='product' ? 'active' : ''}}"><a
                            href="{{route('product.index')}}"><i class="icon-home4"></i> <span>Mehsullar</span></a></li>
                    <li class="{{Request::segment(2)==='category' ? 'active' : ''}}"><a
                            href="{{route('category.index')}}"><i class="icon-home4"></i> <span>Categoriya</span></a>
                    </li>
                    <li class="{{Request::segment(2)==='brand' ? 'active' : ''}}"><a href="{{route('brand.index')}}"><i
                                class="icon-home4"></i> <span>Brands</span></a></li>
                    <li class="{{Request::segment(2)==='lang' ? 'active' : ''}}"><a href="{{route('lang.index')}}"><i
                                class="icon-home4"></i> <span>Dil</span></a></li>
                    <li class="{{Request::segment(2)==='translate' ? 'active' : ''}}"><a
                            href="{{route('translate.index')}}"><i class="icon-home4"></i> <span>Tercume</span></a></li>
                    <li class="{{Request::segment(2)==='setting' ? 'active' : ''}}"><a
                            href="{{route('setting.index')}}"><i class="icon-home4"></i> <span>Ayarlar</span></a></li>
                    <li class="{{Request::segment(2)==='social' ? 'active' : ''}}"><a
                            href="{{route('social.index')}}"><i class="icon-home4"></i> <span>Social</span></a></li>
                    <li class="{{Request::segment(2)==='slide' ? 'active' : ''}}"><a href="{{route('slide.index')}}"><i
                                class="icon-home4"></i> <span>Slide</span></a></li>
                    <li class="{{Request::segment(2)==='faq' ? 'active' : ''}}"><a href="{{route('faq.index')}}"><i
                                class="icon-home4"></i> <span>Haqqimizda</span></a></li>
                    <li class="{{Request::segment(2)==='user_message' ? 'active' : ''}}"><a
                            href="{{route('user_message')}}"><i class="icon-home4"></i>
                            <span>Mesajlar</span><span class="text-danger">-{{$message}}</span></a></li>
                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>