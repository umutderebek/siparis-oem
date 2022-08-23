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



    <section class="section pt-0">
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <form class="shop-cart" method="post" action="#">

                        <div class="table-responsive ">
                            @if(count(Cart::content())>0)
                            <table class="shop-cart-table w-100">
                                <thead>
                                <tr >
                                    <th class="product-remove"></th>
                                    <th class="product-thumbnail"></th>
                                    <th class="product-name"><strong>Product</strong></th>
                                    <th class="product-price"><strong>Color</strong></th>
                                    <th class="product-quantity"><strong>Quantity</strong></th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach(Cart::content() as $urunCartItem)

                                <tr class="cart-item">
                                    <td class="product-remove">
                                        <a href="{{ route('cart.kaldir',$urunCartItem->rowId) }}"><i class="fas fa-times" aria-label="Remove"></i></a>
                                    </td>
                                    <td class="product-thumbnail">
                                        <img src="/frontend/uploads/product/{{$urunCartItem->options->urun_resmi}}" class="img-fluid" width="67" alt="" />
                                    </td>
                                    <td class="product-name">
                                        <a href="{{route('urun',$urunCartItem->options->slug)}}">{{$urunCartItem->name}}</a>
                                    </td>
                                    <td class="product-price">
                                        <span class="unit-price">{{$urunCartItem->options->renk}}</span>
                                    </td>
                                    <td class="product-quantity">
                                        <div class="quantity">
                                            <a href="#" class="btn btn-xs btn-default urun-adet-azalt" data-id="{{$urunCartItem->rowId}}"
                                               data-adet="{{$urunCartItem->qty-1}}">-</a>
                                            <span style="padding: 10px 20px">{{$urunCartItem->qty}}</span>
                                            <a href="#" class="btn btn-xs btn-default urun-adet-artir" data-id="{{$urunCartItem->rowId}}"
                                               data-adet="{{$urunCartItem->qty+1}}">+</a>
                                        </div>
                                    </td>

                                </tr>
                                @endforeach

                                <tr class="border-bottom-0">
                                    <td colspan="6" class="px-0">
                                        <div class="row mx-0">
                                            <div class="col-md-12 text-right px-0">
                                                <div>
                                                <a href=" {{ route('cart.bosalt') }}" class="btn btn-dark btn-outline btn-rounded font-weight-bold btn-h-2 btn-v-3">DELETE PRODUCTS</a>

                                                    <a href="{{route('odeme')}}" class="btn btn-primary btn-rounded font-weight-bold btn-h-2 btn-v-3">PROCEED TO CHECKOUT</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            @else
                                <div style="margin-top: 50px;" class="text-center">
                                    <h1 class="text-center">Sepetinizde Ürün yok </h1>
                                    <a href="{{route('anasayfa','#products')}}" class="btn oem-button text-light btn-rounded font-weight-bold btn-h-2 btn-v-3 text-center">RETURN TO PRODUCTS</a>
                                </div>

                            @endif
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </section>

@section('js-extender')




    <script>


        setTimeout(function () {
            $('.alert').slideUp(10);
        },5000);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <script>


        $(function () {

            $('.urun-adet-artir, .urun-adet-azalt').on('click', function () {

                var id= $(this).attr('data-id');
                var adet= $(this).attr('data-adet');
                $.ajax({
                    type: 'PATCH',
                    url : '/cart/guncelle/' +id,
                    data : {adet:adet},
                    success:function (result) {
                        if(result.success)
                            window.location.href = '/cart';

                    }
                });
            });
        });
    </script>

@endsection

@endsection


