<div class="col-lg-3">
    <nav class="category-nav  primary-nav ">
        <div>
            <a href="javascript:void(0)" class="category-trigger"><i
                    class="fa fa-bars"></i>{{__("category.browse_category")}}</a>
            <ul class="category-menu">

                @foreach($categories->where('parent_id', 0) as $category)

                    <li class="cat-item has-children">
                        <a href="#">{{$category->name}}</a>
                        @if($category->children->isNotEmpty())
                            <ul class="sub-menu">
                                @foreach($category->children as $child)
                                    <li><a href="#">1{{$child->name}}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
</div>
