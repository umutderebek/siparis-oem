@extends('arka')

@section('content')
    <div class="col-md-12">
        <div class="widget">

            <hr class="widget-separator">
            <div class="widget-body">
                <div class="pull-right">
                    {{ $list->links() }}
                </div>
                <div class="col-md-4 pull-left">

                </div>

                <div class="row clearfix">
                    <!-- Task Info -->

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <div class="card">
                            <div class="header">
                                <h2 class="text-center">Ürün YÖNETİMİ   <span  style="font-size: 95%" class="badge bg-blue">{{ $list->count() }}</span></h2>

                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover dashboard-task-infos ">
                                        <thead>
                                        <tr>
                                            <th>Urun_Id</th>
                                            <th>Urun Slug</th>
                                            <th>Urun Adı</th>
                                            <th>Urun Resim</th>
                                            <th>O.Tarihi</th>
                                            <th>G.Tarihi</th>
                                            <th>Ayarlar</th>
                                        </tr>
                                        </thead>
                                        @foreach ($list as $li)
                                            <tr>

                                                <td class="table-primary">{{ $li->id}}</td>
                                                <td class="table-primary">{{ $li->slug}}</td>
                                                <td class="table-warning">{{ $li->urun_adi}}</td>
                                                <td><img  src="/frontend/uploads/product/{{$li->urun_resmi}}" style="height:50px; width: 50px;" ></td>
                                                <td class="table-warning">{{ $li->created_at}}</td>
                                                <td class="table-dark ">{{ $li->updated_at}}</td>
                                                <td>

                                                        <div class="col ">
                                                            <a class="btn-xs btn-warning " href="{{ route('admin.urun.duzenle',$li->id) }}">Düzenle</a><br><br>
                                                        </div>
                                                        <div class="col">
                                                            <a class="btn-xs btn-danger " href="{{ route('admin.urun.sil',$li->id) }}" data-toggle="tooltip" data-placement="top" title="sil" onclick="return confirm('Veriyi Silerseniz geri döndüremezsiniz. Silmek istiyor musunuz ? ')">Sil</a><br><br>
                                                        </div>




                                                </td>
                                            </tr>

                                        @endforeach

                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- #END# Task Info -->
                </div>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div>
@endsection
