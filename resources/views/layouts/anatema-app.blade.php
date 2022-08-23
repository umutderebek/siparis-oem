<!DOCTYPE html >
<html lang="en-us">
<head>

@include('layouts.partials.seo')

<!-- SEO -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    @yield('sayfa-title')
    <meta name="description" content="@yield('sayfa-description')">
    <meta name="keywords" content="@yield('sayfa-keywords')"/>
    <meta name="author" content="@yield('sayfa-author')">

    <meta name="twitter:site" content="@yield('tw-site')" />
    <meta name="twitter:title" content="@yield('tw-title')" />
    <meta name="twitter:description" content="@yield('tw-description')" />
    <meta name="twitter:image" content="@yield('tw-image')" />

    <meta property="og:title" content="@yield('fc-title')" />
    <meta property="og:description" content="@yield('fc-description')" />
    <meta property="og:image" content="@yield('fc-image')" />


    @include('layouts.apartials.head')


    @yield('css')
    @toastr_css


</head>
<body>

<div class="body">
    @include('layouts.apartials.header')





    <div role="main" class="main">

        @yield('content')






    </div>

    @include('layouts.apartials.footer')
</div>

@yield('js-extender')
@yield('js')
@jquery
@toastr_js
@toastr_render
@include('layouts.apartials.js')




</body>
</html>
