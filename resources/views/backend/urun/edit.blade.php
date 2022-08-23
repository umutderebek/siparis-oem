@extends('arka')

@section('content')



    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="card">
                    <div class="header">

                        <h2 style="text-align: center; margin-top: 15px;" class="text-center">Düzenlenecek Ürün =  {{ $list->slug }}</h2>
                    </div>



                    </div>

                    <div class="body">
                        <!-- Nav tabs -->

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                    @endif

                    <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="profile_with_icon_title">
                                <form method="post" action="{{route('admin.urun.guncelle',$list->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">

                                        <div class="col-md-3">
                                            <div class="widget">
                                                <header class="widget-header">
                                                    <h4 class="widget-title text-center">Gunun Fırsatı</h4>
                                                </header><!-- .widget-header -->
                                                <hr class="widget-separator">
                                                <div class="widget-body">

                                                    <div class="form-group">

                                                        <div class="form-group row text-center">
                                                            <label class="col-md-12 label-control" >Günün Fırsatlarına Eklensin mi ? :</label>
                                                            <div class="col-md-12">
                                                                <label>
                                                                    {!! Form::text('goster_gunun_firsati',$list->goster_gunun_firsati, array('placeholder' => 'Ürün Baslik','class' => 'form-control')) !!}
                                                                </label>
                                                            </div>
                                                            <div class="col-md-12">
                                                                @if($list->goster_gunun_firsati == 1)
                                                                    <button type="button" class="btn mw-md btn-success">Ekli</button>
                                                                @else
                                                                    <button type="button" class="btn mw-md btn-danger">Ekli Degil</button>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>




                                                </div><!-- .widget-body -->


                                            </div><!-- .widget -->
                                        </div>
                                        <div class="col-md-3">
                                            <div class="widget">
                                                <header class="widget-header">
                                                    <h4 class="widget-title text-center">Öne Çıkan Ürünler</h4>
                                                </header><!-- .widget-header -->
                                                <hr class="widget-separator">
                                                <div class="widget-body">

                                                    <div class="form-group">

                                                        <div class="form-group row text-center">
                                                            <label class="col-md-12 label-control" >Öne Çıkan Ürünlere Eklensin mi ? :</label>
                                                            <div class="col-md-12">
                                                                <label>
                                                                    {!! Form::text('goster_one_cikan',$list->goster_one_cikan, array('placeholder' => 'Ürün Baslik','class' => 'form-control')) !!}
                                                                </label>
                                                            </div>
                                                            <div class="col-md-12">
                                                                @if($list->goster_one_cikan == 1)
                                                                    <button type="button" class="btn mw-md btn-success">Ekli</button>
                                                                @else
                                                                    <button type="button" class="btn mw-md btn-danger">Ekli Degil</button>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>




                                                </div><!-- .widget-body -->


                                            </div><!-- .widget -->
                                        </div>
                                        <div class="col-md-3">
                                            <div class="widget">
                                                <header class="widget-header">
                                                    <h4 class="widget-title text-center">Çok Satan Ürünler</h4>
                                                </header><!-- .widget-header -->
                                                <hr class="widget-separator">
                                                <div class="widget-body">

                                                    <div class="form-group">

                                                        <div class="form-group row text-center">
                                                            <label class="col-md-12 label-control"> Çok Satan Ürünlere Eklensin mi ? :</label>
                                                            <div class="col-md-12">
                                                                <label>
                                                                    {!! Form::text('goster_cok_satan',$list->goster_cok_satan, array('placeholder' => 'Ürün Baslik','class' => 'form-control')) !!}
                                                                </label>
                                                            </div>
                                                            <div class="col-md-12">
                                                                @if($list->goster_cok_satan == 1)
                                                                    <button type="button" class="btn mw-md btn-success">Ekli</button>
                                                                @else
                                                                    <button type="button" class="btn mw-md btn-danger">Ekli Degil</button>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>




                                                </div><!-- .widget-body -->


                                            </div><!-- .widget -->
                                        </div>
                                        <div class="col-md-3">
                                            <div class="widget">
                                                <header class="widget-header">
                                                    <h4 class="widget-title text-center">İndirimli Ürünler</h4>
                                                </header><!-- .widget-header -->
                                                <hr class="widget-separator">
                                                <div class="widget-body">

                                                    <div class="form-group">

                                                        <div class="form-group row text-center">
                                                            <label class="col-md-12 label-control" >İndirimli Ürünlere Eklensin mi ? :</label>
                                                            <div class="col-md-12">
                                                                <label>
                                                                    {!! Form::text('goster_indirimli',$list->goster_indirimli, array('placeholder' => 'Ürün Baslik','class' => 'form-control')) !!}
                                                                </label>
                                                            </div>
                                                            <div class="col-md-12">
                                                                @if($list->goster_indirimli == 1)
                                                                    <button type="button" class="btn mw-md btn-success">Ekli</button>
                                                                @else
                                                                    <button type="button" class="btn mw-md btn-danger">Ekli Degil</button>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>




                                                </div><!-- .widget-body -->


                                            </div><!-- .widget -->
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Bulunduğu Kategori</strong>

                                                <select class="form-control js-example-basic-multiple" name="kategoriler[]" id="kategoriler" multiple>
                                                    @foreach($kategoriler as $k)
                                                        <option value="{{$k->id}}" {{collect(old('kategoriler',$urun_kategoriler))
                                  ->contains($k->id)? 'selected':''}}>{{$k->kategori_adi}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-line">
                                                <strong>Ürün Ad:</strong>
                                                {!! Form::text('urun_adi',$list->urun_adi, array('placeholder' => 'Ürün Baslik','class' => 'form-control')) !!}
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-line">
                                                <strong>Ürün Özellik 1:</strong>
                                                {!! Form::text('oz1',$list->oz1, array('placeholder' => 'Ürün Özellik 1','class' => 'form-control')) !!}
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-line">
                                                <strong>Ürün Özellik 2:</strong>
                                                {!! Form::text('oz2',$list->oz2, array('placeholder' => 'Ürün Özellik 2','class' => 'form-control')) !!}
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-line">
                                                <strong>Ürün Özellik 3:</strong>
                                                {!! Form::text('oz3',$list->oz3, array('placeholder' => 'Ürün Özellik 3','class' => 'form-control')) !!}
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-line">
                                                <strong>Ürün Özellik 4:</strong>
                                                {!! Form::text('oz4',$list->oz4, array('placeholder' => 'Ürün Özellik 4','class' => 'form-control')) !!}
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Açıklama </strong>


                                                {!! Form::textarea('aciklama', $list->aciklama, array('placeholder' => 'Acıklama','class' => 'ckeditor')) !!}
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-line">
                                                @if($list->urun_resmi !=null)
                                                    <img  class=" pull-right" src="/frontend/uploads/product/{{$list->urun_resmi}}" style="height:250px; width: 250px;" >
                                                @endif
                                                <br>

                                                <div class="pull-left">
                                                    <label for="urun_resmi">Ürün Resmi</label>
                                                    <br>
                                                    <input type="file" id="urun_resmi" name="urun_resmi">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div  style="margin-top: 20px;"  class="col-md-12">
        <div class="panel-group accordion" id="accordion" role="tablist" aria-multiselectable="true">

            </div>

            <div  class="panel panel-default">
                <div  class="panel-heading" role="tab" id="heading-2">
                    <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                        <h4 class="panel-title">Ürün Seo Detayları</h4>
                        <i class="fa acc-switch"></i>
                    </a>
                </div>
                <div id="collapse-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-2">
                    <div class="panel-body">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-line">
                                <strong>Seo Title:</strong>
                                {!! Form::text('seo_title',$list->seo_title, array('placeholder' => 'Ürün Baslik','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-line">
                                <strong>Seo Description:</strong>
                                {!! Form::text('seo_description',$list->seo_description, array('placeholder' => 'Ürün Baslik','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-line">
                                <strong>Seo Keyword:</strong>
                                {!! Form::text('seo_keywords',$list->seo_keywords, array('placeholder' => 'Ürün Baslik','class' => 'form-control')) !!}
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div><!-- panel-group -->
        <div class="col-md-12">
            <div class="widget">
                <header class="widget-header text-center">
                    <a class="btn btn-info" href="{{ route('admin.urun') }}"> Geri</a>
                    <input class="btn btn-primary" type="submit" value="Gönder">
                </header><!-- .widget-header -->

            </div><!-- .widget -->
        </div>
        </form>
    </div><!-- END column -->
@endsection

@section('js')
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

    <script src="//cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };


        CKEDITOR.replace('aciklama',options);

    </script>

    <script>
        $('.js-example-basic-multiple').select2({
            placeholder: 'Select an option'
        });
    </script>



@endsection
