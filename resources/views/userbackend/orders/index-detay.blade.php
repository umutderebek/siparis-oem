
@extends('layouts.anatema-app')

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

    <div class="container">
        <div class="bg-content">
            <a style="margin-top: 25px;"  href="{{route('siparisler')}}" class="btn btn-sm btn-primary">
                <i class="glyphicon glyphicon-arrow-left"></i> Return Orders            </a>
            <h2 class="text-center">Order (SP-{{$siparis->id}})</h2>
            <table class="table table table-hover ">
                <tr>
                    <th colspan="2">Product</th>

                    <th>Quentity</th>

                    <th>Status</th>
                </tr>
                @foreach($siparis->sepet->sepet_urunler as $sepet_urun)
                    <tr>
                        <td style="width: 120px;">
                            <a href="{{route('urun',$sepet_urun->urun->slug)}}">
                                <img src="http://via.placeholder.com/120x100?text=UrunResmi">
                            </a>
                        </td>

                        <td>
                            <a href="{{route('urun',$sepet_urun->urun->slug)}}">
                                {{$sepet_urun->urun->urun_adi}}
                            </a>
                        </td>

                        <td>{{$sepet_urun->adet}}</td>

                        <td>{{$sepet_urun->durum}}</td>

                    </tr>
                @endforeach

            </table>
        </div>
    </div>




@endsection

@section('js-extender')




@stop
