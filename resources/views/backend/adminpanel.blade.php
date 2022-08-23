@extends('arka')

@section('content')
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="widget stats-widget">
                <div class="widget-body clearfix">
                    <div class="pull-left">
                        <h3 class="widget-title text-primary"><span class="counter" data-plugin="counterUp">66.136</span>k</h3>
                        <small class="text-color">Urun Sayısı</small>
                    </div>
                    <span class="pull-right big-icon watermark"><i class="fa fa-paperclip"></i></span>
                </div>

            </div><!-- .widget -->
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="widget stats-widget">
                <div class="widget-body clearfix">
                    <div class="pull-left">
                        <h3 class="widget-title text-danger"><span class="counter" data-plugin="counterUp">3.490</span>k</h3>
                        <small class="text-color">Kategori Sayısı</small>
                    </div>
                    <span class="pull-right big-icon watermark"><i class="fa fa-ban"></i></span>
                </div>

            </div><!-- .widget -->
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="widget stats-widget">
                <div class="widget-body clearfix">
                    <div class="pull-left">
                        <h3 class="widget-title text-warning"><span class="counter" data-plugin="counterUp">{{$sbs->count()}}</span></h3>
                        <small class="text-color">Bültene Kayıt olan Kullanıcılar</small>
                    </div>
                    <span class="pull-right big-icon watermark"><i class="fa fa-file-text-o"></i></span>
                </div>

            </div><!-- .widget -->
        </div>

    </div>
@endsection
