@extends('layouts.admin')
@section('title','Mehsul elave et')
@push('theme_css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css"
          integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@push('theme_js')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"
            integrity="sha512-6F1RVfnxCprKJmfulcxxym1Dar5FsT/V2jiEUvABiaEiFWoQ8yHvqRM/Slf0qJKiwin6IDQucjXuolCfCKnaJQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endpush
@section('content')
    <div class="content">
        @include('layouts.admin.alert')
        <!-- Basic tabs -->
        <form action="{{route('trans_content.store')}}" method="POST" class="row" enctype="multipart/form-data">
            @csrf
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs">
                            @foreach($langs as $key=>$lang)
                                <li class="nav-item {{$key===0 ? 'active':''}}"> <a href="#{{$lang->name}}"
                                                                                    class="nav-link rounded-top " data-toggle="tab">{{$lang->name}}</a></li>
                            @endforeach
                        </ul>
                        <div class="tab-content">
                            @foreach($langs as $key=>$lang)
                                <div class="tab-pane fade{{$key===0?'show active':''}}" id="{{$lang->name}}">
                                    <div class="card">
                                        <div class="card-body">
                                            <fieldset class="content-group">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>Best seller</label>
                                                        <input type="text" class="form-control"
                                                               name="best_seller[{{$lang->name}}]" placeholder="Best seller"
                                                               value="{{old('best_seller.'.$lang->name)}}">
                                                        <span
                                                            class="text-danger">@error('best_seller.'.$lang->name){{'Best seller sahəsi boş ola bilməz!'}}@enderror</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Feature products</label>
                                                        <input type="text" class="form-control"
                                                               name="feature_products[{{$lang->name}}]" placeholder="Feature products"
                                                               value="{{old('feature_products.'.$lang->name)}}">
                                                        <span
                                                            class="text-danger">@error('feature_products.'.$lang->name){{'Feature products sahəsi boş ola bilməz!'}}@enderror</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>New arrivals</label>
                                                        <input type="text" class="form-control" name="new_arrivals[{{$lang->name}}]"
                                                               placeholder="New arrivals" value="{{old('new_arrivals.'.$lang->name)}}">
                                                        <span
                                                            class="text-danger">@error('new_arrivals.'.$lang->name){{'New arrivals sahəsi boş ola bilməz!'}}@enderror</span>

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Mostview products</label>
                                                        <input type="text" class="form-control" name="most_view_products[{{$lang->name}}]"
                                                               placeholder="Mostview products" value="{{old('most_view_products.'.$lang->name)}}">
                                                        <span
                                                            class="text-danger">@error('most_view_products.'.$lang->name){{'Mostview products sahəsi boş ola bilməz!'}}@enderror</span>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Special offer</label>
                                                        <input type="text" class="form-control" name="special_offer[{{$lang->name}}]"
                                                               placeholder="Special offer" value="{{old('special_offer.'.$lang->name)}}">
                                                        <span
                                                            class="text-danger">@error('special_offer.'.$lang->name){{'Special offer sahəsi boş ola bilməz!'}}@enderror</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Arts photography</label>
                                                        <input type="text" class="form-control"
                                                               name="arts_photography[{{$lang->name}}]" placeholder="Arts photography"
                                                               value="{{old('arts_photography.'.$lang->name)}}">
                                                        <span
                                                            class="text-danger">@error('arts_photography.'.$lang->name){{'Arts photography sahəsi boş ola bilməz!'}}@enderror</span>

                                                    </div>
                                                </div>
                                                <div class="col-md-5">

                                                    <div class="form-group">
                                                        <label>Childrens books </label>
                                                        <input type="text" class="form-control"
                                                               name="childrens_books[{{$lang->name}}]"
                                                               placeholder="Childrens books "
                                                               value="{{old('childrens_books.'.$lang->name)}}">
                                                        <span
                                                            class="text-danger">@error('childrens_books.'.$lang->name){{'Childrens books  sahəsi boş ola bilməz!'}}@enderror</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Biographies</label>
                                                        <input type="text" class="form-control"
                                                               name="biographies[{{$lang->name}}]" placeholder="Biographies"
                                                               value="{{old('biographies.'.$lang->name)}}">
                                                        <span
                                                            class="text-danger">@error('biographies.'.$lang->name){{'Biographies sahəsi boş ola bilməz!'}}@enderror</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Days</label>
                                                        <input type="text" class="form-control"
                                                               name="days[{{$lang->name}}]" placeholder="Days"
                                                               value="{{old('days.'.$lang->name)}}">
                                                        <span
                                                            class="text-danger">@error('days.'.$lang->name){{'Days sahəsi boş ola bilməz!'}}@enderror</span>

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Hours</label>
                                                        <input type="text" class="form-control"
                                                               name="hours[{{$lang->name}}]" placeholder="Hours"
                                                               value="{{old('hours.'.$lang->name)}}">
                                                        <span
                                                            class="text-danger">@error('hours.'.$lang->name){{'Hours sahəsi boş ola bilməz!'}}@enderror</span>

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Hours</label>
                                                        <input type="text" class="form-control"
                                                               name="mins[{{$lang->name}}]" placeholder="Hours"
                                                               value="{{old('mins.'.$lang->name)}}">
                                                        <span
                                                            class="text-danger">@error('mins.'.$lang->name){{'Hours sahəsi boş ola bilməz!'}}@enderror</span>

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Secs</label>
                                                        <input type="text" class="form-control"
                                                               name="secs[{{$lang->name}}]" placeholder="Secs"
                                                               value="{{old('secs.'.$lang->name)}}">
                                                        <span
                                                            class="text-danger">@error('secs.'.$lang->name){{'Secs sahəsi boş ola bilməz!'}}@enderror</span>

                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Göndər<i
                        class="icon-arrow-right14 position-right"></i></button>
            </div>
    </div>




    </form>
    <!-- /basic tabs -->

    </div>
    <script>
        $('.summernote').summernote();
    </script>
@endsection
