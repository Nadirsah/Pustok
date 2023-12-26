{{--@if($errors->any())--}}
{{--    <div class="row">--}}
{{--        @foreach($errors->all() as $error)--}}
{{--            <div class="col-lg-3">--}}
{{--                <div class="alert alert-danger border-0 alert-dismissible">--}}
{{--                    <button type="button" class="close" data-dismiss="alert"><span>x</span></button>--}}
{{--                    {{$error}}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--@endif--}}

@if(session('message'))
<div class="row">
        <div class="col-lg-3">
            <div class="alert alert-{{session('type')}} border-0 alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"><span>x</span></button>
              {{session('message')}}
            </div>
        </div>
</div>
@endif
