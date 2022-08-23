@extends('layouts.anatema')

@section('aside-page-title','HOME')

@section('sayfa-title')
    <title>RD Global Research & Development </title>
@endsection


@section('sayfa-description')We're dedicated to continuous innovation in order to shape everything we do Our purpose is to improve health of the patients all around the world.@endsection

@section('sayfa-keywords')@endsection

@section('sayfa-author','Rd Global Admin')

@section('tw-title')RD Global Research & Development @endsection
@section('tw-site','@rdglobal_inc')
@section('tw-description')We're dedicated to continuous innovation in order to shape everything we do Our purpose is to improve health of the patients all around the world.@endsection


@section('fc-title')RD Global Research & Development @endsection

@section('fc-image')https://www.rdglobal.com.tr/frontend/img/anasayfa/rev-slider-1.png @endsection
@section('fc-description')We're dedicated to continuous innovation in order to shape everything we do Our purpose is to improve health of the patients all around the world.@endsection

@section('content')
    @include('layouts.partials.slider')
    <!-- 1. section -->
    @jquery
    @toastr_js
    @toastr_render
    <div class="multi-dev2"></div>

    <section id="products" class="section pt-5">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col">
                    <div class="overflow-hidden">
                        <span class="d-block top-sub-title text-color-primary appear-animation" data-appear-animation="maskUp">CATEGORIES</span>
                    </div>
                    <div class="overflow-hidden mb-2">
                        <h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Browse Our Categories</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($kategoriler as $kat)
                <div style="margin: 15px;" class="col-8 col-md-5 col-lg-4 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                    <a href="{{route('kategori',$kat->slug)}}">
                        <div class="image-frame overlay overlay-show overlay-op-5 image-frame-style-1 image-frame-effect-2 image-frame-style-1">
                            <div class="image-frame-wrapper">
                                <img style="height: 225px;" src="/frontend/uploads/category/{{$kat->kategori_resmi}}" class="img-fluid" alt="">
                                <div class="image-frame-info image-frame-info-show">
                                    <div class="image-frame-info-box-style-1">
                                        <h3 class="font-weight-bold text-color-default text-uppercase text-1 m-0 p-0">{{$kat->kategori_adi}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                    @endforeach

            </div>
        </div>
    </section>


    <div style="margin-top: 50px;" class="multi-dev2"></div>


    <section style="margin-top: 50px;" class="section pt-0 pb-5">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col">
                    <div class="overflow-hidden">

                    </div>
                    <div class="overflow-hidden mb-2">
                        <h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">MOST RECENT PRODUCTS</h2>
                    </div>
                </div>
            </div>
            <div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                <div class="col">
                    <div class="owl-carousel owl-theme nav-style-3" data-plugin-options="{'loop': true, 'autoplay': false, 'items': 4, 'nav': true, 'dots': false, 'margin': 20, 'autoplayHoverPause': true, 'autoHeight': true}">

                        <div class="text-center">
                            <div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
                                <div class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                                    <a href="shop-product-detail-right-sidebar.html">
                                        <img src="/frontend/product/3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="image-frame-action">
                                        <a href="#" class="btn oem-button text-light btn-rounded font-weight-semibold btn-v-3 btn-fs-2">ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-color-default text-2 mb-0"><a href="shop-product-detail-right-sidebar.html">Long Hoddie</a></h3>
                        </div>

                        <div class="text-center">
                            <div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
                                <div class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                                    <a href="shop-product-detail-right-sidebar.html">
                                        <img src="/frontend/product/5.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="image-frame-action">
                                        <a href="#" class="btn oem-button text-light  btn-rounded font-weight-semibold btn-v-3 btn-fs-2">ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-color-default text-2 mb-0"><a href="shop-product-detail-right-sidebar.html">Leather Belt</a></h3>
                        </div>

                        <div class="text-center">
                            <div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
                                <div class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                                    <a href="shop-product-detail-right-sidebar.html">
                                        <img src="/frontend/product/4.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="image-frame-action">
                                        <a href="#" class="btn oem-button text-light  btn-rounded font-weight-semibold btn-v-3 btn-fs-2">ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-color-default text-2 mb-0"><a href="shop-product-detail-right-sidebar.html">Jack Sandals</a></h3>
                        </div>

                        <div class="text-center">
                            <div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
                                <div class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                                    <a href="shop-product-detail-right-sidebar.html">
                                        <img src="/frontend/product/6.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="image-frame-action">
                                        <a href="#" class="btn oem-button text-light  btn-rounded font-weight-semibold btn-v-3 btn-fs-2">ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-color-default text-2 mb-0"><a href="shop-product-detail-right-sidebar.html">Vintage Hat</a></h3>
                        </div>

                        <div class="text-center">
                            <div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
                                <div class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                                    <a href="shop-product-detail-right-sidebar.html">
                                        <img src="/frontend/product/7.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="image-frame-action">
                                        <a href="#" class="btn oem-button text-light  btn-rounded font-weight-semibold btn-v-3 btn-fs-2">ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-color-default text-2 mb-0"><a href="shop-product-detail-right-sidebar.html">Timez Watch</a></h3>
                        </div>

                        <div class="text-center">
                            <div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
                                <div class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                                    <a href="shop-product-detail-right-sidebar.html">
                                        <img src="/frontend/product/8.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="image-frame-action">
                                        <a href="#" class="btn oem-button text-light  btn-rounded font-weight-semibold btn-v-3 btn-fs-2">ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-color-default text-2 mb-0"><a href="shop-product-detail-right-sidebar.html">Clauren Bag</a></h3>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section call-to-action call-to-action-text-light call-to-action-height-2 oem-button">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-md-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                    <div class="call-to-action-content">
                        <h2 class="font-weight-semibold line-height-1">Send a message or call us now </h2>
                        <h2 class="font-weight-semibold line-height-1">Find out how we can help</h2>
                    </div>
                </div>
                <div class="col-lg-4 justify-content-start justify-content-lg-center appear-animation" data-appear-animation="fadeInLeftShorter">
                    <div class="icon-box icon-box-style-1 pl-3 pl-lg-0">
                        <div class="icon-box-icon">
                            <i class="fas fa-phone-square text-color-light text-10"></i>
                        </div>
                        <div class="icon-box-info">
                            <div class="icon-box-info-title">
                                <h3 class="text-color-light font-weight-normal text-left text-lg-right text-1 mb-1">CALL US NOW</h3>
                            </div>
                            <p class="mb-0">
                                <a class="text-color-light font-primary font-weight-extra-bold text-decoration-none hover-effect-1 text-6 line-height-2 no-skin" href="tel:+903122357735" target="_blank" title="Call Us Now">+90 (312) 235 77 35</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="margin-top: 50px;" class="section pt-0 pb-5">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col">
                    <div class="overflow-hidden">

                    </div>
                    <div class="overflow-hidden mb-2">
                        <h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">FEATURED PRODUCTS</h2>
                    </div>
                </div>
            </div>
            <div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                <div class="col">
                    <div class="owl-carousel owl-theme nav-style-3" data-plugin-options="{'loop': true, 'autoplay': false, 'items': 4, 'nav': true, 'dots': false, 'margin': 20, 'autoplayHoverPause': true, 'autoHeight': true}">

                        <div class="text-center">
                            <div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
                                <div class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                                    <a href="shop-product-detail-right-sidebar.html">
                                        <img src="/frontend/product/3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="image-frame-action">
                                        <a href="#" class="btn oem-button text-light btn-rounded font-weight-semibold btn-v-3 btn-fs-2">ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-color-default text-2 mb-0"><a href="shop-product-detail-right-sidebar.html">Long Hoddie</a></h3>

                        </div>

                        <div class="text-center">
                            <div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
                                <div class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                                    <a href="shop-product-detail-right-sidebar.html">
                                        <img src="/frontend/product/5.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="image-frame-action">
                                        <a href="#" class="btn oem-button text-light  btn-rounded font-weight-semibold btn-v-3 btn-fs-2">ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-color-default text-2 mb-0"><a href="shop-product-detail-right-sidebar.html">Leather Belt</a></h3>
                        </div>

                        <div class="text-center">
                            <div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
                                <div class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                                    <a href="shop-product-detail-right-sidebar.html">
                                        <img src="/frontend/product/4.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="image-frame-action">
                                        <a href="#" class="btn oem-button text-light  btn-rounded font-weight-semibold btn-v-3 btn-fs-2">ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-color-default text-2 mb-0"><a href="shop-product-detail-right-sidebar.html">Jack Sandals</a></h3>
                        </div>

                        <div class="text-center">
                            <div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
                                <div class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                                    <a href="shop-product-detail-right-sidebar.html">
                                        <img src="/frontend/product/6.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="image-frame-action">
                                        <a href="#" class="btn oem-button text-light  btn-rounded font-weight-semibold btn-v-3 btn-fs-2">ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-color-default text-2 mb-0"><a href="shop-product-detail-right-sidebar.html">Vintage Hat</a></h3>
                        </div>

                        <div class="text-center">
                            <div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
                                <div class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                                    <a href="shop-product-detail-right-sidebar.html">
                                        <img src="/frontend/product/7.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="image-frame-action">
                                        <a href="#" class="btn oem-button text-light  btn-rounded font-weight-semibold btn-v-3 btn-fs-2">ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-color-default text-2 mb-0"><a href="shop-product-detail-right-sidebar.html">Timez Watch</a></h3>
                        </div>

                        <div class="text-center">
                            <div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
                                <div class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                                    <a href="shop-product-detail-right-sidebar.html">
                                        <img src="/frontend/product/8.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="image-frame-action">
                                        <a href="#" class="btn oem-button text-light  btn-rounded font-weight-semibold btn-v-3 btn-fs-2">ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-color-default text-2 mb-0"><a href="shop-product-detail-right-sidebar.html">Clauren Bag</a></h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="multi-dev2"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 p-0">
                <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
                <iframe class="mapbox2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3061.017700767932!2d32.70948431538013!3d39.896235979429015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc835f0742bf469fd!2sRD%20GLOBAL%20GENEL%20MERKEZ!5e0!3m2!1str!2str!4v1575197200563!5m2!1str!2str" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen="">

                </iframe>
            </div>
            <div style="margin-top: 50px;" class="col-md-6 bg-light-5">
                <section class="section px-3 px-md-5">
                    <div class="row">
                        <div class="col">
                            <form class="contact-form" action="" method="POST">
                                <div class="contact-form-success alert alert-success d-none">
                                    <strong>Success!</strong> Your message has been sent to us.
                                </div>
                                <div class="contact-form-error alert alert-danger d-none">
                                    <strong>Error!</strong> There was an error sending your message.
                                    <span class="mail-error-message d-block"></span>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" placeholder="Name" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="email" value="" data-msg-required="Please enter your e-mail address." data-msg-email="Please enter a valid e-mail address." class="form-control" name="email" id="email" placeholder="E-mail" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <input type="text" value="" data-msg-required="Please enter your subject." class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <input type="submit" value="SEND REQUEST" class="btn btn-primary btn-rounded btn-4 font-weight-semibold text-color-light" data-loading-text="Loading...">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
