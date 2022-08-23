<div class="col-md-6 p-0 m-0">

    <div class="xd">
        <?php $count = 0; ?>
        @foreach($urunler_art as $art)
            @if ($art->type == 'arterial')

                <div class="font-weight-bold  card-one-product-title-k  venous-title-1 float-left  ">Arterial</div>
                <div style="height: 50px;">
                    <?php if($count ==0) break; ?>
                    <?php $count++; ?>
                    @endif
                    @endforeach


                </div>
                <ul>
                    @foreach($urunler_venous as $ven)
                        @if ($ven->type == 'arterial')

                            <li style="margin-right: 35px;" class="mb-5">
                                <a href="{{route('ulkeurun',$ven->slug)}}">
                                    <div class="image-frame   image-frame-style-1  image-frame-style-5 card-one-product-shadow-1    ">
                                        <div class="poligon-product-kırmızı   ">

                                            <div class="image-frame-wrapper">
                                                <img  style="background-size: contain" src="/frontend/uploads/product/{{$ven->urun_resmi}}">

                                                <div class="image-frame-info image-frame-info-show flex-column    ">

                                                    <div class="product-urun-yazi  product-urun-yazi-ayarlar  "> <span>{!! $ven->urun_slogan1 !!}</span><br>
                                                        {!! $ven->urun_slogan2 !!}<br>
                                                        <span style="color:#00aeef; ">{!! $ven->urun_slogan3 !!}</span></div>
                                                </div>

                                                <div class="image-frame-info image-frame-info-show flex-column    ">

                                                    <div style="  margin-top: 165px; margin-left: 25px;" class="text-color-light-2"><span class="product-urun-alt">{!! $ven->urun_title !!}</span><br>
                                                        <div style="margin-left: 15px; margin-top: -10px;" class="product-urun-alt-2x" >{!! $ven->urun_alt_title !!}</div></div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>

                        @endif

                    @endforeach

                </ul>

    </div>
</div>


<div class="col-md-6 p-0 m-0">
    <div class="xd ">
        <?php $count = 0; ?>
        @foreach($urunler_art as $art)
            @if ($art->type == 'venous')

                <div class="font-weight-bold  card-one-product-title-m  venous-title-1 float-left ">Venous</div>
                <div style="height: 50px;">

                </div>
                <?php if($count ==0) break; ?>
                <?php $count++; ?>
            @endif
        @endforeach


        <ul>

            @foreach($urunler_art as $art)
                @if ($art->type == 'venous')

                    <li style="margin-left: 35px;" class="mb-5  ">
                        <a href="{{route('ulkeurun',$art->slug)}}">
                            <div class="image-frame   image-frame-style-1  image-frame-style-5 card-one-product-shadow-2    ">
                                <div class="poligon-product-turquaz    ">


                                    <div class="image-frame-wrapper   ">

                                        <img style="background-size: cover;" src="/frontend/uploads/product/{!! $art->urun_resmi !!}">


                                        <div class="image-frame-info image-frame-info-show flex-column    ">

                                            <div class="product-urun-yazi  product-urun-yazi-ayarlar  "> <span>   {!! $art->urun_slogan1 !!}</span><br>
                                                {!! $art->urun_slogan2 !!}<br>
                                                <span style="color:#00aeef; ">   {!! $art->urun_slogan3 !!}</span></div>
                                        </div>

                                        <div class="image-frame-info image-frame-info-show flex-column    ">

                                            <div class="product-urun-yazi-alt-ayarlar text-color-light-2"><span class="product-urun-alt">{!! $art->urun_title !!}</span><br>
                                                <div style="margin-left: 15px; margin-top: -10px;" class="product-urun-alt-2x" >{!! $art->urun_alt_title !!}</div></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    </li>
                    </a>

                @endif

            @endforeach




        </ul>





    </div>
</div>
