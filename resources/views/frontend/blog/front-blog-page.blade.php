@extends('layouts.anatema')

@section('aside-page-title','NEWS ROOM')

@section('sayfa-title')
    <title>RD Global Research & Development | News </title>
@endsection

@section('sayfa-description','')

@section('sayfa-keywords','')

@section('sayfa-author','')

@section('css')

@stop

@section('content')


    <section    class="section  futura-section-color">
        <div class="container">
            <div class="rd-footer-shadow2"></div>
            <div  class="row text-center">
                <div style="margin-top: 50px;" class="container">
                    <div class="row">
                        <aside class="sidebar col-md-4 col-lg-3 order-2">
                            <div class="accordion accordion-default accordion-toggle accordion-style-1" role="tablist">

                                <div class="card">
                                    <div class="card-header accordion-header" role="tab" id="categories">
                                        <h3 class="text-3  mb-0">
                                            <a href="#" class="text-color-light-2" data-toggle="collapse" data-target="#toggleCategories" aria-expanded="false" aria-controls="toggleCategories">CATEGORIES</a>
                                        </h3>
                                    </div>

                                    <div id="toggleCategories" class="accordion-body collapse show" aria-labelledby="categories">

                                        <div class="card-body">
                                            <ul class="list list-unstyled">
                                                @foreach($kategori as $kg)
                                                    <li class="mb-2">
                                                        <a href="{{route('bkategori',$kg->slug)}}" class="font-weight-semibold text-color-light-2"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i>{{$kg->kategori_adi}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>

                                        <div class="rd-footer-shadow2"></div>
                                    </div>
                                    <div style="margin-top: 20px;" class="card bg-primary-4 border-0 rounded text-center">
                                        <div class="card-body p-4 my-3">
                                            <div class="icon-box icon-box-style-1 align-items-center mb-0">
                                                <div class="icon-box-icon pr-2">
                                                    <img width="60" src="/frontend/img/icons/envelope.svg" alt="" data-icon="" data-plugin-options="{'color': '#FFF'}" style="opacity: 1;">
                                                </div>
                                                <div class="icon-box-info">
                                                    <div class="icon-box-info-title">
                                                        <span class="icon-box-sub-title text-color-light">SUBSCRIBE TO OUR</span>
                                                        <h4 class="text-color-light font-weight-bold line-height-1 mb-0">NEWSLETTER</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-color-light opacity-6 mb-3">Enter your email address to subscribe to my newsletter</p>
                                            <form  action="{{route('subs.mail.store')}}" method="post" >
                                                @csrf
                                              <div class="form-row">
                                                    <div class="form-group col mb-0">
                                                        <input name="email" type="email" class="newsletter-email form-control rounded-0 border-0 line-height-1" placeholder="Email address" aria-label="Email address" required="">
                                                    </div>
                                                </div>
                                                <div style="margin-top: 10px;" class="form-row">
                                                    <div class="form-group col mb-0">
                                                        <button class="btn news-button text-3 text-color-light " type="submit"> SUBSCRIBE  </button>

                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <div class="rd-footer-shadow2"></div>

                        <div class="col-md-8 col-lg-9 order-1 mb-5 mb-md-0">
                            <div class="row  portfolio-list portfolio-list-style-2" data-plugin-masonry data-plugin-options="{'itemSelector': '.isotope-item'}">
                                @foreach($blog as $bg)
                                <div class="col-sm-6 isotope-item mb-5 p-0">
                                    <div class="portfolio-item">
                                        <article class="blog-post">

                                            <h2 class="font-weight-bold text-4 mb-3">
                                                <a href="{{route('sblog',$bg->slug)}}" class="text-color-light-2">  {{$bg->post_baslik}}</a>
                                            </h2>
                                            <div class="owl-carousel owl-theme dots-style-2 nav-style-2" data-plugin-options="{'items': 1, 'dots': true, 'nav': false, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut'}">
                                                <div>
                                                    <a href="{{route('sblog',$bg->slug)}}">
                                                        <div class="image-frame hover-effect-2">
                                                            <div class="image-frame-wrapper">
                                                                <img style="height: 275px;" src="/frontend/uploads/blog/ongorsel/{{$bg->gimage}}" class="img-fluid" alt="" />
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex opacity-6 my-2">
                                                <span class="top-sub-title text-color-light-2 px-3 text-2">  {{date('d F , Y', strtotime($bg->created_at))}} </span>
                                                <span class="top-sub-title  text-color-light-2 d-flex align-items-center border border-top-0 border-bottom-0 px-3"><i class="far fa-folder  text-3 mr-1"></i>{{$bg->blogkategori->kategori_adi}}</span>
                                                <span class="top-sub-title  text-color-light-2 d-flex align-items-center  border-top-0 border-bottom-0 px-3"><i class="far fa-user-circle  text-3 mr-1"></i>Rd Global Blog</span>
                                            </div>
                                            <hr style="background-color: white;" class="mt- mb-3 ">
                                            <p style="white-space: pre-wrap; /* css-3 */
                                    white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
                                    white-space: -pre-wrap; /* Opera 4-6 */
                                    white-space: -o-pre-wrap; /* Opera 7 */
                                    word-wrap: break-word; /* Internet Explorer 5.5+ */ "  class="text-color-light-2">{{$bg->onyazi}}</p>
                                            <a href="{{route('sblog',$bg->slug)}}" class="btn news-button text-color-light-2 font-weight-bold learn-more">READ MORE <i class="fas fa-angle-right text-3" aria-label="Read more"></i></a>
                                        </article>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <hr class="mt-5 mb-4">
                            <div class="rd-footer-shadow2"></div>
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination mb-0">
                                            {{ $blog->links() }}
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>




@stop


@section('js')

@stop
