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


    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form method="post" action="{{route('odemeyap')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-5">
                            <div class="col-md-6 mb-5 mb-md-0">
                                <h2 class="font-weight-bold mb-3 text-center">Billing Address</h2>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="text-color-dark font-weight-semibold" for="billing_name">NAME:</label>
                                        {!! Form::text('billing_name',null, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Billing Name')) !!}
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="text-color-dark font-weight-semibold" for="billing_last_name">LAST NAME:</label>
                                        {!! Form::text('billing_last_name',null, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Billing Last Name')) !!}

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="text-color-dark font-weight-semibold" for="billing_company">COMPANY NAME:</label>
                                        {!! Form::text('billing_company',null, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Billing Company')) !!}

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="text-color-dark font-weight-semibold" for="billing_address">ADDRESS:</label>
                                        {!! Form::text('billing_address',null, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Billing Address')) !!}

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        {!! Form::text('billing_address2',null, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Billing Address 2')) !!}

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="text-color-dark font-weight-semibold" for="billing_city">CITY / TOWN:</label>
                                        {!! Form::text('billing_city',null, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Billing City')) !!}

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="text-color-dark font-weight-semibold" for="billing_email">EMAIL ADDRESS:</label>
                                        {!! Form::text('billing_email',null, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Billing Email')) !!}

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="text-color-dark font-weight-semibold" for="billing_phone">PHONE:</label>
                                        {!! Form::text('billing_phone',null, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Billing phone')) !!}

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h2 class="font-weight-bold text-center mb-3">Shipping Address</h2>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="text-color-dark font-weight-semibold" for="shipping_name">NAME:</label>
                                        {!! Form::text('shipping_name',null, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Shipping Name')) !!}

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="text-color-dark font-weight-semibold" for="shipping_last_name">LAST NAME:</label>
                                        {!! Form::text('shipping_last_name',null, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Shipping Last Name')) !!}

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="text-color-dark font-weight-semibold" for="shipping_company">COMPANY NAME:</label>
                                        {!! Form::text('shipping_company',null, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Shipping Company')) !!}

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="text-color-dark font-weight-semibold" for="shipping_address">ADDRESS:</label>
                                        {!! Form::text('shipping_address',null, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Shipping Address')) !!}

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">

                                        {!! Form::text('shipping_address2',null, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Shipping Address 2')) !!}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="text-color-dark font-weight-semibold" for="shipping_city">CITY / TOWN:</label>
                                        {!! Form::text('shipping_city',null, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Shipping City')) !!}

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="text-color-dark font-weight-semibold" for="shipping_notes">NOTES:</label>
                                        {!! Form::textarea('shipping_notes',null, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Shipping Notes')) !!}

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-4 mb-md-0">
                                <h3 class="font-weight-bold text-4 text-center">Your Orders ({{Cart::content()->count()}})</h3>
                                <div class="shop-cart">

                                    <div class="table-responsive text-center">
                                        @if(count(Cart::content())>0)
                                        <table class="shop-cart-table w-100">
                                            <thead>
                                            <tr>
                                                <th class="product-thumbnail"></th>
                                                <th class="product-name"><strong>Product</strong></th>
                                                <th class="product-price"><strong>Quantity</strong></th>
                                                <th class="product-price"><strong>Colour</strong></th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach(Cart::content() as $urunCartItem)
                                            <tr class="cart-item">
                                                <td class="product-thumbnail">
                                                    <img src="/frontend/uploads/product/{{$urunCartItem->options->urun_resmi}}" class="img-fluid" width="67" alt="" />
                                                </td>
                                                <td class="product-name">
                                                    <a href="{{route('urun',$urunCartItem->options->slug)}}">{{$urunCartItem->name}}</a>
                                                </td>
                                                <td class="product-price">
                                                    <span class="unit-price">{{$urunCartItem->qty}}</span>
                                                </td>
                                                <td class="product-price">
                                                    <span class="unit-price">{{$urunCartItem->options->renk}}</span>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @else
                                                <div style="margin-top: 50px;" class="text-center">
                                                    <h1 class="text-center">Sepetinizde Ürün yok </h1>
                                                    <a href="{{route('anasayfa','#products')}}" class="btn oem-button text-light btn-rounded font-weight-bold btn-h-2 btn-v-3 text-center">RETURN TO PRODUCTS</a>
                                                </div>

                                            @endif
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div style="margin-top: 50px;" class="row">
                            <div class="col text-center">
                                {!! Form::submit(trans('PLACE ORDER'), ['class' => 'btn btn-primary btn-rounded font-weight-bold btn-h-2 btn-v-3 ']) !!}

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('js-extender')




@endsection
