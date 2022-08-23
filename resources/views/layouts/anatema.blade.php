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


    @include('layouts.partials.head')


    @yield('css')
        @toastr_css


</head>
<body>

<div class="body">
    @include('layouts.partials.header')





    <div role="main" class="main">
        @include('layouts.partials.alert')
        @yield('content')






    </div>

    @include('layouts.partials.footer')
</div>

@jquery
@toastr_js
@toastr_render
@yield('js-extender')
@yield('js')

@include('layouts.partials.js')




</body>
</html>
