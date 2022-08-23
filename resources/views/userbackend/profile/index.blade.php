
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


    <style>
        .image-container {
            position: relative;
        }

        .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .image-container:hover .image {
            opacity: 0.3;
        }

        .image-container:hover .middle {
            opacity: 1;
        }
    </style>

    <div style="margin-top: 50px; margin-bottom: 50px;" class="container">
        <div class="row">
            <div class="col">

                <div class="card">
                    <div class="card-header">Profile Settings</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('dene.profile.kaydet',$user->id) }}" enctype="multipart/form-data">
                            @csrf


                            @if(count($errors)>0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="form-group row">
                                <div class="col-lg-12">

                                    <div class="col text-center">
                                        <img src="/frontend/uploads/profile/{{Auth::user()->urun_resmi}}" class="img-fluid rounded-circle" alt="" width="48" />
                                    </div>
                                </div>
                                <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDisabled">Profile Photo :</label>
                                <div class="col-md-9 ">

                                    {!! Form::file('urun_resmi', array('class' => 'form-control')) !!}
                                </div>

                            </div>
                            <div style="margin-top: 50px;" class="form-group row">
                                <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDisabled">Name :</label>
                                <div class="col-lg-6">
                                    {!! Form::text('name',Auth::user()->name, ['class' => 'form-control bg-light-5 rounded border-0 text-1 ' ,'placeholder' => 'Surname', 'required' => '']) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDisabled">Surname :</label>
                                <div class="col-lg-6">
                                    {!! Form::text('surname',Auth::user()->surname, ['class' => 'form-control bg-light-5 rounded border-0 text-1 ' ,'placeholder' => 'Surname', 'required' => '']) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 control-label text-lg-right pt-2" for="inputReadOnly">Company</label>
                                <div class="col-lg-6">
                                    {!! Form::text('company',Auth::user()->company, ['class' => 'form-control bg-light-5 rounded border-0 text-1 ' ,'placeholder' => 'Company', 'required' => '']) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 control-label text-lg-right pt-2" for="inputReadOnly">Website</label>
                                <div class="col-lg-6">
                                    {!! Form::text('website',Auth::user()->website, ['class' => 'form-control bg-light-5 rounded border-0 text-1 ' ,'placeholder' => 'Website']) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 control-label text-lg-right pt-2" for="inputHelpText">Phone Number:</label>
                                <div class="col-lg-6">
                                    {!! Form::text('phone',Auth::user()->phone, ['class' => 'form-control bg-light-5 rounded border-0 text-1 ' ,'placeholder' => 'Phone Number', 'required' => '']) !!}

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 control-label text-lg-right pt-2" for="inputHelpText">Address:</label>
                                <div class="col-lg-6">
                                    {!! Form::textarea('address',Auth::user()->address, ['class' => 'form-control bg-light-5 rounded border-0 text-1 ' ,'placeholder' => 'Address', 'required' => '']) !!}

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 control-label text-lg-right pt-2">Selected Your Country</label>
                                <div class="col-lg-6">


                                    <h4><span class="badge badge-primary">Selected Country : {{substr ($user->country,2,100)}}</span></h4>

                                    <select name="country" class="form-control bg-light-5 rounded border-0 text-1" style="width:250px">
                                        @foreach ($countries as $key => $value)
                                            <option value="{{ $key }}-{{ $value }}" name="{{$value}}">{{ $value }}</option>
                                        @endforeach

                                    </select>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 control-label text-lg-right pt-2">Selected Your State</label>
                                <div class="col-lg-6">
                                    <h4><span class="badge badge-primary">Selected State : {{$user->state}}</span></h4>
                                    <select name="state" class="form-control bg-light-5 rounded border-0 text-1"style="width:250px">
                                    </select>
                                </div>
                            </div>





                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Send
                                    </button>


                                </div>
                            </div>
                        </form>


                    </div>
                </div>

            </div>
        </div>


    </div>







@endsection

@section('js-extender')


    <script type="text/javascript">
        jQuery(document).ready(function ()
        {
            jQuery('select[name="country"]').on('change',function(){
                var countryID = jQuery(this).val();
                if(countryID)
                {
                    jQuery.ajax({
                        url : 'profile/dropdownlist/getstates/' +countryID,
                        type : "GET",
                        dataType : "json",
                        success:function(data)
                        {
                            console.log(data);
                            jQuery('select[name="state"]').empty();
                            jQuery.each(data, function(value,key){
                                $('select[name="state"]').append('<option value="'+ key +'">'+ key +'</option>');
                            });
                        }
                    });
                }
                else
                {
                    $('select[name="state"]').empty();
                }
            });
        });
    </script>




@stop
