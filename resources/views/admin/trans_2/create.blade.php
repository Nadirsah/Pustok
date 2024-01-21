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
    <form action="{{route('trans_2.store')}}" method="POST" class="row" enctype="multipart/form-data">
        @csrf
        <div class="col-md-12">
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
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="text" class="form-control" name="password[{{$lang->name}}]"
                                                    placeholder="Password" value="{{old('password.'.$lang->name)}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Returning</label>
                                                <input type="text" class="form-control" name="returning[{{$lang->name}}]"
                                                    placeholder="Returning" value="{{old('returning.'.$lang->name)}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Image</label>
                                                <input type="text" class="form-control" name="image[{{$lang->name}}]"
                                                    placeholder="Image" value="{{old('image.'.$lang->name)}}">

                                            </div>
                                            <div class="form-group">
                                                <label>Product</label>
                                                <input type="text" class="form-control"
                                                    name="product[{{$lang->name}}]" placeholder="Product"
                                                    value="{{old('product.'.$lang->name)}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="text" class="form-control" name="price[{{$lang->name}}]"
                                                    placeholder="Price" value="{{old('price.'.$lang->name)}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Total</label>
                                                <input type="text" class="form-control"
                                                    name="total[{{$lang->name}}]"
                                                    placeholder="Total"
                                                    value="{{old('total.'.$lang->name)}}">

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Quantity</label>
                                                <input type="text" class="form-control"
                                                    name="quantity[{{$lang->name}}]"
                                                    placeholder="Quantity"
                                                    value="{{old('quantity.'.$lang->name)}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Cart summary</label>
                                                <input type="text" class="form-control"
                                                    name="cart_summary[{{$lang->name}}]" placeholder="Cart summary"
                                                    value="{{old('cart_summary.'.$lang->name)}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Sub</label>
                                                <input type="text" class="form-control"
                                                    name="sub[{{$lang->name}}]" placeholder="Sub"
                                                    value="{{old('sub.'.$lang->name)}}">

                                            </div>
                                            <div class="form-group">
                                                <label>Grand</label>
                                                <input type="text" class="form-control"
                                                    name="grand[{{$lang->name}}]"
                                                    placeholder="Grand"
                                                    value="{{old('grand.'.$lang->name)}}">

                                            </div>
                                            <div class="form-group">
                                                <label>Checkout</label>
                                                <input type="text" class="form-control"
                                                    name="checkout[{{$lang->name}}]"
                                                    placeholder="Checkout"
                                                    value="{{old('checkout.'.$lang->name)}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Billing</label>
                                                <input type="text" class="form-control"
                                                    name="billing[{{$lang->name}}]" placeholder="Billing"
                                                    value="{{old('billing.'.$lang->name)}}">
                                            </div>
                                            </div>
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label>First</label>
                                                <input type="text" class="form-control"
                                                    name="first[{{$lang->name}}]" placeholder="First"
                                                    value="{{old('first.'.$lang->name)}}">

                                            </div>
                                            <div class="form-group">
                                                <label>Last</label>
                                                <input type="text" class="form-control"
                                                    name="last[{{$lang->name}}]"
                                                    placeholder="Last"
                                                    value="{{old('last.'.$lang->name)}}">

                                            </div>
                                            <div class="form-group">
                                                <label>Company</label>
                                                <input type="text" class="form-control"
                                                    name="company[{{$lang->name}}]"
                                                    placeholder="Company"
                                                    value="{{old('company.'.$lang->name)}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control"
                                                    name="country[{{$lang->name}}]" placeholder="Country"
                                                    value="{{old('country.'.$lang->name)}}">
                                            </div>
                                            <div class="form-group">
                                                <label>No</label>
                                                <input type="text" class="form-control"
                                                    name="no[{{$lang->name}}]" placeholder="No"
                                                    value="{{old('no.'.$lang->name)}}">

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