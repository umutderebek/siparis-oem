@extends('layouts.anatema')

@section('aside-page-title')
   NEWS ROOM > <span class="text-uppercase">{{$blog->post_baslik}}
    @endsection

@section('sayfa-title')

    @if(strlen($blog->post_baslik)<60)
        <title>RD Global Research & Development |{{$blog->post_baslik}} </title>
        @else
        <title>{{$blog->post_baslik}} </title>

    @endif

@endsection

@section('sayfa-description'){{$blog->onyazi}}@endsection

@section('sayfa-keywords'){{$blog->post_baslik}}@endsection

@section('sayfa-author','Rd Global Admin')

@section('tw-title'){{$blog->post_baslik}}@endsection
@section('tw-site','@rdglobal_inc')
@section('tw-description'){{$blog->onyazi}}@endsection


@section('fc-title'){{$blog->post_baslik}}@endsection
@section('fc-image')https://www.rdglobal.com.tr/frontend/uploads/blog/kapak/{{$blog->kimage}}@endsection
@section('fc-description'){{$blog->onyazi}}@endsection





   @section('css')

@stop

@section('content')



    <section    class="section  futura-section-color">
        <div class="rd-footer-shadow2"></div>
        <div class="container">
            <div class="row">
                <aside class="sidebar col-md-4 col-lg-3 order-2">
                    <div class="accordion accordion-default accordion-toggle accordion-style-1 mb-5" role="tablist">

                        <div class="card">
                            <div id="toggleSidebarSearch" class="accordion-body accordion-body-show-border-top collapse show" role="tabpanel" aria-labelledby="sidebarSearchForm">
                                <div class="card-body pt-4">
                                    <form id="sidebarSearchForm" class="sidebar-search" action="page-search-results.html" method="get">
                                        <div class="input-group">
                                            <input type="text" class="form-control line-height-1 bg-light-5" name="s" id="s" placeholder="Search..." required="">
                                            <span class="input-group-btn">
														<button class="btn btn-light" type="submit"><i class="fas fa-search text-color-primary"></i></button>
													</span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header accordion-header" role="tab" id="categories">
                                <h3 class="text-3 mb-0">
                                    <a href="#" class="text-color-light-2" data-toggle="collapse" data-target="#toggleCategories" aria-expanded="false" aria-controls="toggleCategories">CATEGORIES</a>
                                </h3>
                            </div>
                            <div id="toggleCategories" class="accordion-body collapse show" aria-labelledby="categories">
                                <div class="card-body">
                                    <ul class="list list-unstyled text-center">

                                        @foreach($kategoris as $kg)

                                            <li class="mb-2">
                                                <a href="{{route('bkategori',$kg->slug)}}" class="font-weight-semibold text-color-light-2"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i>{{$kg->kategori_adi}}</a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header accordion-header" role="tab" id="popularPosts">
                                <h3 class="text-3 mb-0">
                                    <a href="#" class="text-color-light-2" data-toggle="collapse" data-target="#togglePopularPosts" aria-expanded="false" aria-controls="togglePopularPosts">POPULAR</a>
                                </h3>
                            </div>
                            <div id="togglePopularPosts" class="accordion-body collapse show" aria-labelledby="popularPosts">
                                <div class="card-body">


                                    @foreach($popular as $p)

                                        @if ($p->deleted_at == null )
                                            <article class="row align-items-center mb-3">
                                                <div class="col-4 pr-0">
                                                    <a href="{{route('sblog',$p->slug)}}">
                                                        <img src="/frontend/uploads/blog/kapak/{{$p->kimage}} " class="img-fluid hover-effect-2" alt="" />
                                                    </a>
                                                </div>
                                                <div class="col-8">
                                                    <span class="text-color-light-2"> {{$p->post_baslik}}</span>
                                                    <h4 class="text-2 mb-0">
                                                        <a href="#" class="text-1">  {{date('d F , Y', strtotime($p->created_at))}} </a>
                                                    </h4>
                                                </div>
                                            </article>
                                        @endif

                                    @endforeach

                                </div>

                            </div>
                        </div>



                    </div>
                    <div class="rd-footer-shadow2"></div>
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
                </aside>

                <div class="rd-footer-shadow2"></div>

                <div class="col-md-8 col-lg-9 order-1 mb-5 mb-md-0">
                    <article class="blog-post mb-4">
                        <h2  class="font-weight-bold  mb-3 text-center">
                            <a  style="white-space: pre-wrap; /* css-3 */
                                    white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
                                    white-space: -pre-wrap; /* Opera 4-6 */
                                    white-space: -o-pre-wrap; /* Opera 7 */
                                    word-wrap: break-word; /* Internet Explorer 5.5+ */ "  class="text-color-light-2">{{$blog->post_baslik}}</a>
                        </h2>
                        <div class="d-flex mb-3">
                            <span class="post-date text-color-light-2 text-3 pr-3"><i class="fas fa-calendar-alt"></i> {{$blog->created_at->format('d M Y' )}}</span>

                        </div>
                        <header class="blog-post-header mb-3 text-center">
                            <img style="height: 500px;" src="/frontend/uploads/blog/kapak/{{$blog->kimage}}" class="img-fluid" alt="" />
                        </header>
                        <div style="white-space: pre-wrap; /* css-3 */
                                    white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
                                    white-space: -pre-wrap; /* Opera 4-6 */
                                    white-space: -o-pre-wrap; /* Opera 7 */
                                    word-wrap: break-word; /* Internet Explorer 5.5+ */ " class="mb-4 text-color-light text-justify">
                    {!! $blog->yazi !!}

                        </div>
                        <footer class="blog-post-footer border border-left-0 border-right-0 py-4 mt-5">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-12 col-sm-auto mb-3 mb-sm-0 mb-md-3 mb-lg-0">

                                </div>

                                <div class="col-12 col-sm-auto">
                                    <div class="d-flex align-items-center">
                                        <span class="text-2 text-color-light-2">SHARE THIS POST</span>
                                        <ul class="social-icons social-icons-light social-icons-1 ml-3">
                                            <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </footer>
                        <div class="rd-footer-shadow2"></div>
                    </article>
                    <div class="rd-footer-shadow2"></div>


                </div>
            </div>
        </div>
    </section>




@stop


@section('js')

@stop
