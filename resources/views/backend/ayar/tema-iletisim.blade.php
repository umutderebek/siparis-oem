@extends('arka')

@section('content')

    <div class="col-md-12">
        <div class="widget">
            <header class="widget-header">
                <h3 class="text-center">Tema Genel Ayarlar</h3>
            </header><!-- .widget-header -->

            <div class="widget-body">


                <form method="POST" class="form-horizontal" action="{{route('admin.iletisim.kaydet')}}" enctype="multipart/form-data">
                    <h2 style="margin-left: 15px;" >Header Ayarları</h2>
                    @csrf
                    <hr style="margin-top: 10px;" class="widget-separator">
                    @foreach($ayarlar as $a)
                        <div style="margin-top: 25px;" class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">ADRES AYARLARI :</label>
                            <div class="col-sm-9">
                                {!! Form::text('iadres', $a->iadres, array('placeholder' => 'Adresinizi Giriniz ','class' => 'form-control border-primary')) !!}
                            </div>
                        </div>
                        <div style="margin-top: 25px;" class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">TELEFON-1 AYARLARI :</label>
                            <div class="col-sm-9">
                                {!! Form::text('itelefon', $a->itelefon, array('placeholder' => 'Telefon Numaranızı Giriniz','class' => 'form-control border-primary')) !!}
                            </div>
                        </div>
                        <div style="margin-top: 25px;" class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">TELEFON-2 AYARLARI :</label>
                            <div class="col-sm-9">
                                {!! Form::text('itelefon_2', $a->itelefon_2, array('placeholder' => '2. Telefon yada Fax Numaranızı Giriniz','class' => 'form-control border-primary')) !!}
                            </div>
                        </div>
                        <div style="margin-top: 25px;" class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">E-MAİL-1 AYARLARI :</label>
                            <div class="col-sm-9">
                                {!! Form::text('imail', $a->imail, array('placeholder' => 'Emailinizi Giriniz ','class' => 'form-control border-primary')) !!}
                            </div>
                        </div>
                        <div style="margin-top: 25px;" class="form-group">
                            <label for="exampleTextInput1" class="col-sm-3 control-label">E-MAİL-2 AYARLARI :</label>
                            <div class="col-sm-9">
                                {!! Form::text('imail2', $a->imail2, array('placeholder' => 'Emailinizi Giriniz ','class' => 'form-control border-primary')) !!}
                            </div>
                        </div>

                    @endforeach
                    <div class="form-actions text-center">
                        {!! Form::submit(trans('Gönder'), ['class' => 'btn btn-success gradient-mint ']) !!}
                    </div>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div>

@endsection
