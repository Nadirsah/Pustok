<div class="col-lg-3">
    <nav class="category-nav  primary-nav show">
        <div>
            <a href="javascript:void(0)" class="category-trigger"><i
                    class="fa fa-bars"></i>Browse
                categories</a>
            <ul class="category-menu">
                @foreach($categories->where('parent_id', 0) as $category)

                    <li class="cat-item has-children">
                        <a href="#">{{$category->name}}</a>
                        @if($category->children->isNotEmpty())
                            <ul class="sub-menu">
                                @foreach($category->children as $child)
                                    <li><a href="#">{{$child->name}}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>

                @endforeach
                <li class="cat-item"><a href="#">Perfomance Filters</a></li>
                <li class="cat-item has-children"><a href="#">Cookbooks</a>
                    <ul class="sub-menu">
                        <li><a href="">Brake Tools</a></li>
                        <li><a href="">Driveshafts</a></li>
                        <li><a href="">Emergency Brake</a></li>
                        <li><a href="">Spools</a></li>
                    </ul>
                </li>
                <li class="cat-item hidden-menu-item"><a href="#">Accessories</a></li>
                <li class="cat-item hidden-menu-item"><a href="#">Education</a></li>
                <li class="cat-item hidden-menu-item"><a href="#">Indoor Living</a></li>
                <li class="cat-item"><a href="#" class="js-expand-hidden-menu">More
                        Categories</a></li>
            </ul>
        </div>
    </nav>

</div>
