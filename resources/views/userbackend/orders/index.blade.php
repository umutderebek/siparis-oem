
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

    <div style="margin-top: 50px; margin-bottom: 50px;" class="container text-center">
        <div class="bg-content">
            <h2 class="text-center">Requested Orders</h2>
            @if(count($siparisler)==0)
                <p>Heniz siparisiniz yok</p>
            @else
                <table style="margin-top: 50px;" class="table table-bordererd table-hover">
                    <tr>
                        <th>Order Code</th>
                        <th>Total Product</th>
                        <th>status</th>
                        <th>Settings</th>
                    </tr>
                    <tr>
                        @foreach($siparisler as $siparis)
                            <td>SP-00{{$siparis->id}}</td>

                            <td>{{$siparis->sepet->sepet_urun_adet()}}</td>
                            <td>{{$siparis->durum}}</td>
                            <td><a href="{{route('siparis',$siparis->id)}}" class="btn btn-sm btn-success">Details</a></td>
                    </tr>
                    @endforeach
                </table>
            @endif
        </div>
    </div>




@endsection

@section('js-extender')




@stop
