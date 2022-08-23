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


    <div style="margin-top: 50px;" class="container">


        <div class="row">
            <aside class="sidebar col-md-4 col-lg-3 order-2">
                <div class="accordion accordion-default accordion-toggle accordion-style-1" role="tablist">

                    <div class="card">
                        <div class="card-header accordion-header" role="tab" id="categories">
                            <h5 class="mb-0">
                                <a href="#" data-toggle="collapse" data-target="#toggleCategories" aria-expanded="false" aria-controls="toggleCategories">CATEGORIES</a>
                            </h5>
                        </div>
                        <div id="toggleCategories" class="accordion-body collapse show" role="tabpanel" aria-labelledby="categories">
                            <div class="card-body">
                                <ul class="list list-unstyled mb-0">
                                    @foreach($kategoriler as $kat)

                                    <li><a href="{{route('kategori',$kat->slug)}}">{{$kat->kategori_adi}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header accordion-header" role="tab" id="price">
                            <h5 class="mb-0">
                                <a href="#" data-toggle="collapse" data-target="#togglePrice" aria-expanded="false" aria-controls="togglePrice">POPULAR PRODUCTS</a>
                            </h5>
                        </div>
                        <div id="togglePrice" class="accordion-body collapse show" role="tabpanel" aria-labelledby="price">
                            <div class="card-body">

                                @foreach($most_recent as $rec)
                                <div class="product row align-items-center mb-4">
                                    <div class="col-5 pr-0">
                                        <div class="image-frame image-frame-border image-frame-style-1 ">
														<span class="image-frame-wrapper">
                                                            	<a href="{{route('urun',$rec->slug)}}">
															<img src="/frontend/uploads/product/{{$rec->urun_resmi}}" class="img-fluid" alt="">
                                                                    	</a>
															<span class="image-frame-action image-frame-action-style-2 image-frame-action-effect-1 image-frame-action-md">



															</span>
														</span>
                                        </div>
                                    </div>

                                    <div class="col-7">
                                        <h3 class="font-secondary text-color-default text-2 mb-0"><a href="{{route('urun',$rec->slug)}}">{{$rec->urun_adi}}</a></h3>

                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <div class="col-md-8 col-lg-9 order-1 mb-5 mb-md-0">
                <div class="row mb-5">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <div class="owl-carousel owl-theme manual dots-style-2 nav-style-2 nav-color-dark mb-3" id="thumbGalleryDetail">
                            <div>
                                <img  src="/frontend/uploads/product/{{$urun->urun_resmi}}" class="img-fluid" alt="">
                            </div>
                            <div>
                                <img   src="/frontend/uploads/product/{{$urun->urun_resmi_var_1}}" class="img-fluid" alt="">
                            </div>
                            <div>
                                <img  src="/frontend/uploads/product/{{$urun->urun_resmi_var_2}}" class="img-fluid" alt="">
                            </div>
                            <div>
                                <img   src="/frontend/uploads/product/{{$urun->urun_resmi_var_3}}" class="img-fluid" alt="">
                            </div>
                            <div>
                                <img   src="/frontend/uploads/product/{{$urun->urun_resmi_var_4}}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="owl-carousel owl-theme manual thumb-gallery-thumbs mt" id="thumbGalleryThumbs">
                            <div>
											<span class="d-block">
												<img alt="Product Image"  src="/frontend/uploads/product/{{$urun->urun_resmi}}" class="img-fluid">
											</span>
                            </div>
                            <div>
											<span class="d-block">
												<img alt="Product Image"   src="/frontend/uploads/product/{{$urun->urun_resmi_var_1}}" class="img-fluid">
											</span>
                            </div>
                            <div>
											<span class="d-block">
												<img alt="Product Image"   src="/frontend/uploads/product/{{$urun->urun_resmi_var_2}}" class="img-fluid">
											</span>
                            </div>
                            <div>
											<span class="d-block">
												<img alt="Product Image"   src="/frontend/uploads/product/{{$urun->urun_resmi_var_3}}" class="img-fluid">
											</span>
                            </div>
                            <div>
											<span class="d-block">
												<img alt="Product Image"   src="/frontend/uploads/product/{{$urun->urun_resmi_var_4}}" class="img-fluid">
											</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h2 class="line-height-1 font-weight-bold mb-2">{{$urun->urun_adi}}</h2>
                        <p class="mt-4">
                           {!!$urun->aciklama !!}
                        </p>
                        <hr class="my-4">
                        <ul class="list list-unstyled">
                            <li>AVAILABILITY: <strong>AVAILABLE</strong></li>
                        </ul>
                        <hr class="my-4">
                        <form action="{{route('cart.ekle')}}" method="post">
                            @csrf

                            <input type="hidden" name="id" value="{{$urun->id}}">
                            <input type="submit" class="btn btn-primary btn-rounded font-weight-semibold btn-v-3 btn-fs-2" value="ADD TO CART">

                        </form>
                        <hr class="my-4">
                        <div class="d-flex align-items-center">
                            <span class="text-2">SHARE</span>
                            <ul class="social-icons social-icons-dark social-icons-1 ml-3">
                                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col">
                        <ul class="nav nav-tabs nav-tabs-default" id="productDetailTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold active" id="productDetailDescTab" data-toggle="tab" href="#productDetailDesc" role="tab" aria-controls="productDetailDesc" aria-expanded="true">DESCRIPTION</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold" id="productDetailMoreInfoTab" data-toggle="tab" href="#productDetailMoreInfo" role="tab" aria-controls="productDetailMoreInfo">MORE INFO</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="contentTabProductDetail">
                            <div class="tab-pane fade pt-4 pb-4 show active" id="productDetailDesc" role="tabpanel" aria-labelledby="productDetailDescTab">
                                <p class="text-color-light-3">{!! $urun->aciklama !!}</p>

                            </div>
                            <div class="tab-pane fade pt-4 pb-4" id="productDetailMoreInfo" role="tabpanel" aria-labelledby="productDetailMoreInfoTab">
                                <table class="table">
                                    <tbody>

                                    <tr>
                                        <th class="border-top-0" scope="row">Size</th>
                                        <td class="border-top-0">{{$urun->oz2}}</td>
                                    </tr>
                                    <tr>
                                        <th  scope="row">Diameter</th>
                                        <td >{{$urun->oz1}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Color</th>
                                        <td>{{$urun->renk}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Product Settings</th>
                                        <td>{{$urun->oz3}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade pt-4 pb-4" id="productDetailReviews" role="tabpanel" aria-labelledby="productDetailReviewsTab">
                                <ul class="comments">
                                    <li>
                                        <div class="comment">
                                            <div class="d-none d-sm-block">
                                                <img class="avatar rounded-circle" alt="" src="/frontend/img/authors/author-2.jpg">
                                            </div>
                                            <div class="comment-block">
															<span class="comment-by">
																<span class="comment-rating">
																	<i class="fas fa-star text-color-dark mr-1"></i>
																	<i class="fas fa-star text-color-dark mr-1"></i>
																	<i class="fas fa-star text-color-dark mr-1"></i>
																	<i class="fas fa-star text-color-dark mr-1"></i>
																	<i class="fas fa-star text-color-dark"></i>
																</span>
																<strong class="comment-author text-color-dark">Robert Doe</strong>
																<span class="comment-date border-right-0 text-color-light-3">MARCH 5, 2018 at 2:28 pm</span>
															</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment">
                                            <div class="d-none d-sm-block">
                                                <img class="avatar rounded-circle" alt="" src="/frontend/img/authors/author-1.jpg">
                                            </div>
                                            <div class="comment-block">
															<span class="comment-by">
																<span class="comment-rating">
																	<i class="fas fa-star text-color-dark mr-1"></i>
																	<i class="fas fa-star text-color-dark mr-1"></i>
																	<i class="fas fa-star text-color-dark mr-1"></i>
																	<i class="fas fa-star text-color-dark mr-1"></i>
																	<i class="fas fa-star-half text-color-dark"></i>
																</span>
																<strong class="comment-author text-color-dark">John Doe</strong>
																<span class="comment-date border-right-0 text-color-light-3">MARCH 5, 2018 at 2:28 pm</span>
															</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment">
                                            <div class="d-none d-sm-block">
                                                <img class="avatar rounded-circle" alt="" src="/frontend/img/authors/author-3.jpg">
                                            </div>
                                            <div class="comment-block">
															<span class="comment-by">
																<span class="comment-rating">
																	<i class="fas fa-star text-color-dark mr-1"></i>
																	<i class="fas fa-star text-color-dark mr-1"></i>
																	<i class="fas fa-star text-color-dark mr-1"></i>
																	<i class="fas fa-star text-color-dark mr-1"></i>
																</span>
																<strong class="comment-author text-color-dark">Jessica Doe</strong>
																<span class="comment-date border-right-0 text-color-light-3">MARCH 5, 2018 at 2:28 pm</span>
															</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <div class="row mt-4 pt-2">
                                    <div class="col">
                                        <h2 class="font-weight-bold text-3 mb-3">LEAVE A REVIEW</h2>
                                        <form class="form-style-2" action="#" method="post">
                                            <div class="form-row">
                                                <div class="form-group">
                                                    <div class="rating p-1">
                                                        <label>
                                                            <input type="radio" name="rating" value="5" title="5 stars"> 5
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="rating" value="4" title="4 stars"> 4
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="rating" value="3" title="3 stars"> 3
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="rating" value="2" title="2 stars"> 2
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="rating" value="1" title="1 star"> 1
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <textarea class="form-control bg-light-5 border-0 rounded-0" placeholder="Review" rows="6" name="review" required></textarea>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <input type="text" value="" class="form-control border-0 rounded-0" name="name" placeholder="Name" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="email" value="" class="form-control border-0 rounded-0" name="email" placeholder="E-mail" required>
                                                </div>
                                            </div>
                                            <div class="form-row mt-2">
                                                <div class="col">
                                                    <input type="submit" value="POST REVIEW" class="btn btn-primary btn-rounded btn-h-2 btn-v-2 font-weight-bold">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2 class="font-weight-bold text-4 mb-4">Another Products</h2>
                    </div>
                </div>
                <div class="row">

                    @foreach($rand_product as $pro)
                    <div class="col-sm-4 mb-4">
                        <div class="product portfolio-item portfolio-item-style-2">
                            <div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
											<span class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
												<a href="{{route('urun',$pro->slug)}}">
													<img src="/frontend/img/products/product-1.jpg" class="img-fluid" alt="">
												</a>
												<span class="image-frame-action">
												 <form action="{{route('cart.ekle')}}" method="post">
                                                        @csrf

                                                            <input type="hidden" name="id" value="{{$pro->id}}">
                                                           <input type="submit" class="btn btn-primary btn-rounded font-weight-semibold btn-v-3 btn-fs-2" value="ADD TO CART">

                                                     </form>
												</span>
											</span>
                            </div>
                            <div class="product-info text-center  flex-column flex-lg-row justify-content-between">
                                <div class="product-info-title">
                                    <h3 class="text-color-default text-2 line-height-1 mb-1"><a href="shop-product-detail-right-sidebar.html">{{$pro->urun_adi}}</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>


@endsection

@section('js-extender')



    <script src="/frontend/vendor/owl.carousel/owl.carousel.min.js"></script>
    <!-- Examples -->
    <script src="/frontend/js/examples/examples.gallery.js"></script>

@endsection
