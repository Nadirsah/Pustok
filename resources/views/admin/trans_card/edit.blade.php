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
    <form action="{{route('trans_card.store')}}" method="POST" class="row" enctype="multipart/form-data">
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
                                                <label>Shopping cart</label>
                                                <input type="text" class="form-control"
                                                    name="shopping_cart[{{$lang->name}}]" placeholder="Placeholder"
                                                    value="{{old('shopping_cart.'.$lang->name,$data->getTranslation('shopping_cart',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('shopping_cart.'.$lang->name){{'Shopping cart sahəsi boş ola bilməz!'}}@enderror</span>
                                            </div>
                                            <div class="form-group">
                                                <label>Image</label>
                                                <input type="text" class="form-control"
                                                    name="image[{{$lang->name}}]" placeholder="Search button"
                                                    value="{{old('image.'.$lang->name,$data->getTranslation('image',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('image.'.$lang->name){{'Image sahəsi boş ola bilməz!'}}@enderror</span>
                                            </div>
                                            <div class="form-group">
                                                <label>Product</label>
                                                <input type="text" class="form-control" name="product[{{$lang->name}}]"
                                                    placeholder="Login" value="{{old('product.'.$lang->name,$data->getTranslation('product',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('product.'.$lang->name){{'Product sahəsi boş ola bilməz!'}}@enderror</span>

                                            </div>
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="text" class="form-control" name="price[{{$lang->name}}]"
                                                    placeholder="Or" value="{{old('price.'.$lang->name,$data->getTranslation('price',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('price.'.$lang->name){{'Price sahəsi boş ola bilməz!'}}@enderror</span>
                                            </div>

                                            <div class="form-group">
                                                <label>Total</label>
                                                <input type="text" class="form-control" name="total[{{$lang->name}}]"
                                                    placeholder="Register" value="{{old('total.'.$lang->name,$data->getTranslation('total',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('total.'.$lang->name){{'Total sahəsi boş ola bilməz!'}}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Cart summary</label>
                                                <input type="text" class="form-control"
                                                    name="cart_summary[{{$lang->name}}]" placeholder="Shopping cart"
                                                    value="{{old('cart_summary.'.$lang->name,$data->getTranslation('cart_summary',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('cart_summary.'.$lang->name){{'Cart summary sahəsi boş ola bilməz!'}}@enderror</span>

                                            </div>
                                            <div class="form-group">
                                                <label>Sub total</label>
                                                <input type="text" class="form-control"
                                                    name="sub_total[{{$lang->name}}]"
                                                    placeholder="Browse category"
                                                    value="{{old('sub_total.'.$lang->name,$data->getTranslation('sub_total',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('sub_total.'.$lang->name){{'Sub total sahəsi boş ola bilməz!'}}@enderror</span>
                                            </div>
                                            <div class="form-group">
                                                <label>Shipping cost</label>
                                                <input type="text" class="form-control"
                                                    name="shipping_cost[{{$lang->name}}]" placeholder="Free support"
                                                    value="{{old('shipping_cost.'.$lang->name,$data->getTranslation('shipping_cost',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('shipping_cost.'.$lang->name){{'Shipping cost sahəsi boş ola bilməz!'}}@enderror</span>
                                            </div>
                                            <div class="form-group">
                                                <label>Grand total</label>
                                                <input type="text" class="form-control"
                                                    name="grand_total[{{$lang->name}}]" placeholder="View cart"
                                                    value="{{old('grand_total.'.$lang->name,$data->getTranslation('grand_total',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('grand_total.'.$lang->name){{'Grand total sahəsi boş ola bilməz!'}}@enderror</span>

                                            </div>
                                            <div class="form-group">
                                                <label>Checkout</label>
                                                <input type="text" class="form-control"
                                                    name="checkout[{{$lang->name}}]" placeholder="View cart"
                                                    value="{{old('checkout.'.$lang->name,$data->getTranslation('checkout',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('checkout.'.$lang->name){{'Checkout sahəsi boş ola bilməz!'}}@enderror</span>

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