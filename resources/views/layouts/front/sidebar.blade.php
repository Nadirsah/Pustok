<div class="col-lg-3">
    <nav class="category-nav  primary-nav ">
        <div>
            <a href="javascript:void(0)" class="category-trigger"><i
<<<<<<< HEAD
                    class="fa fa-bars"></i>{{__('category.browse_category')}}</a>
=======
                    class="fa fa-bars"></i>{{__("category.browse_category")}}</a>
>>>>>>> c1ad6b2092262052c593147c463557aab120cd16
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
            </ul>
        </div>
    </nav>
</div>
