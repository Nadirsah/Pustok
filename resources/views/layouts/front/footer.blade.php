
<footer class="site-footer">
    <div class="container">
        <div class="row justify-content-between  section-padding">
            <div class=" col-xl-3 col-lg-4 col-sm-6">
                <div class="single-footer pb--40">
                    <div class="brand-footer footer-title">
                        <img src="{{asset('front')}}/assets/image/logo--footer.png" alt="">
                    </div>
                    <div class="footer-contact">
                        <p><span class="label">{{__('contakt.address')}}:</span><span class="text">Example Street 98, HH2 BacHa, New
                                    York,
                                    USA</span></p>
                        <p><span class="label">{{__('contakt.phone')}}:</span><span class="text">+18088 234 5678</span></p>
                        <p><span class="label">{{__('contakt.email')}}:</span><span class="text">suport@hastech.com</span></p>
                    </div>
                </div>
            </div>
            <div class=" col-xl-3 col-lg-2 col-sm-6">
                <div class="single-footer pb--40">
                    <div class="footer-title">
                        <h3>{{__('letter.extras')}}</h3>
                    </div>
                    <ul class="footer-list normal-list">
                        <li><a href="">Delivery</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Stores</a></li>
                        <li><a href="">Contact us</a></li>
                        <li><a href="">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <div class=" col-xl-3 col-lg-4 col-sm-6">
                <div class="footer-title">
                    <h3>{{__('contakt.newsletter_subscribe')}}</h3>
                <div class="newsletter-form mb--30">
                    <form action="./php/mail.php">
                        <input type="email" class="form-control" placeholder="{{__('placeholder.enter_your_email')}}...">
                        <button class="btn btn--primary w-100">{{__("contakt.subscribe")}}</button>
                    </form>
                </div>
                <div class="social-block">
                    <h3 class="title">{!!__("contakt.stay_connected")!!}</h3>
                    <ul class="social-list list-inline">
                        <div class="off-canvas-social">
                            @foreach($social as $data)
                                <a href="{{$data->url}}" class="single-icon" ><i class="fa-brands fa-{{$data->name}}"></i></a>
                            @endforeach
                        </div>
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </div>

</footer>

