@extends('layouts.admin')
@section('title','Mehsullar')
@section('theme_css')
    <link href="{{asset('admin')}}\global_assets\css\icons\fontawesome\styles.min.css" rel="stylesheet" type="text/css">

@endsection
@section('theme_js')
    <script src="{{asset('admin')}}\global_assets\js\plugins\tables\datatables\datatables.min.js"></script>
    <script src="{{asset('admin')}}\global_assets\js\plugins\forms\selects\select2.min.js"></script>
    <script src="{{asset('admin')}}\global_assets\js\demo_pages\datatables_advanced.js"></script>
    <script src="{{asset('admin')}}\global_assets\js\demo_pages\components_thumbnails.js"></script>
@endsection


@section('content')
    <div class="content">

        <div class="card">
            <div class="card-header header-elements-inline">

                <h5 class="card-title"><a href="{{route('product.create')}}" class="btn btn-info"><i class="icon-plus3 mr-3 icon-xl"></i> Mehsul elave et</a></h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>



            <table class="table datatable-show-all">
                <thead>
                <tr>
                    <th>Categoriya</th>
                    <th>Tags</th>
                    <th>Vergi</th>
                    <th>Qiymet</th>
                    <th>Evvelki qiymet</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Title</th>
                    <th>Haqqinda</th>
                    <th>Tesfir</th>
                    <th>Sekil</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($item as $items)
                <tr>
                    <td>{{$items->getCategory->name}}</td>
                    <td>{{$items->tags}}</td>
                    <td>{{$items->tax}}</td>
                    <td>{{$items->price}}</td>
                    <td>{{$items->old_price}}</td>
                    <td>{{$items->brand}}</td>
                    <td>{{$items->model}}</td>
                    <td>{!! $items->title!!}</td>
                    <td>{!! $items->about !!}</td>
                    <td>{!! $items->description !!}</td>
                    <td><div class="content-group">
                            <a  type="button" class="btn bg-blue btn-block" data-toggle="modal" data-target="#modal-login{{$items->id}}" >Sekil</a>
                        </div></td>
                    <td> <a href="{{route('product.edit',$items->id)}}"><i
                                class="btn btn-info fa fa-edit"></i></a>
                        <a href="{{route('product.delete',$items->id)}}"><i
                                class="btn btn-danger fa fa-trash"></i></a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <!-- Login form -->
    <div id="modal-login{{$items->id}}" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    @foreach($items->images as $image)
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                            </div>
                            <div class="thumbnail">
                                <div class="thumb">
                                    <img width="50" src="{{$image->file_path}}" alt="">
                                    <div class="caption-overflow">
												<span>
													<a href="#" class="btn bg-warning-300 btn-icon"><i class="icon-link"></i></a>
												</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                    <!-- Resimleri Listeleme -->





                </div>
            </div>
        </div>
    </div>
    <!-- /login form -->
@endsection

