@extends('layouts.anatema')

@section('aside-page-title','ABOUT US')

@section('sayfa-title')
    <title>RD Global Research & Development | About Us </title>
@endsection

@section('sayfa-description','')

@section('sayfa-keywords','')

@section('sayfa-author','')

@section('content')


    <div id="dvMap" style="width:100%; height: 600px">
    </div>

    <section  class="section futura-section-color">
        <div class="container">
            <div class="row appear-animation" data-appear-animation="fadeInRightShorter">
                <div class="col-md-6 mb-4 mb-md-0 text-center">
                    <div class="icon-box-icon">
                        <img width="44" src="/frontend/vendor/linea-icons/software/software_layers2.svg" alt="" data-icon="" data-plugin-options="{'color': '#2388ED', 'animated': true, 'delay': 600, 'strokeBased': true, 'svgStyle': 'stroke-width: 3'}" style="opacity: 1;">
                    </div>
                    <h2 class="font-weight-bold text-6 text-color-light-2 mb-3 ">What We Do</h2>
                    <p class="text-color-light-2 text-4">Our purpose is to improve health of the patients all around the world with our strong,hard working, dedicated and clinically driven biomedical solutions team. Our products and technologies are mostly focused on endovascular treatment solutions with addition of wide range of medical conditions. </p>
                </div>

                <div class="col-md-6 text-center">
                    <div class="icon-box-icon">
                        <img width="44" src="/frontend/img/demos/business-consulting/icons/company-strategy.svg" alt="" data-icon="" data-plugin-options="{'color': '#2388ED', 'animated': true, 'delay': 600}" style="opacity: 1;">

                    </div>
                    <h2 class="font-weight-bold text-6 text-color-light mb-3 ">Creative Process</h2>
                    <p class="text-color-light-2 text-4">RD’s mission dictates human healthcare and welfare above everything.Our mission is to contribute to heritage of humanity by achieving the best in multiple disciplines of medicine and biomedical engineering in order to serve optimal healthcare solutions.</p>
                </div>
            </div>


        </div>
    </section>

    <section style="margin-top: -50px;"  class="section futura-section-color ">
                <div  class="container pb-md-5 mb-lg-5">
                    <div class="rd-footer-shadow2"></div>
                    <div class="row justify-content-center pb-4">
                        <div class="col-lg-10 text-center">
                            <div class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" style="animation-delay: 100ms;">

                                <p class=" text-5 text-color-light-2">We continue our success by expanding Innovation in the new era of medicine by connecting people with our products in more than   39 countries all around the globe. Trust is our priority to share with World, one piece of the Turkey’s great medical technology potential.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
    </section>



    <section style="margin-top: -120px;" class="section section-skew  bg-primary-3 ">
        <div class="section-skew-layer   section-skew-layer-mobile-right bg-dark-5 skew-layer-from-right" data-skew-layer="" data-skew-layer-value="65%" data-skew-layer-from="right" style="left: 65%; transition: left 300ms ease 0s;"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="font-weight-semibold text-light mb-0">"We’re dedicated to continuous innovation in order to<br> shape everything we do."</h2>
                </div>
            </div>
        </div>
    </section>
<div style="height: 75px;" class="futura-section-color">

</div>









@endsection

@section('js')

    <script type="text/javascript">
        var markers = [
            {
                "title": 'Turkey Head Office',
                "lat": '39.8969328',
                "lng": '32.7086704',
                "description": '1961. Cd. No:27, Mutlukent Çankaya/ANKARA/TURKEY'
            },
            {
                "title": 'Sales Office',
                "lat": '41.0762912',
                "lng": '29.0249991',
                "description": 'Akmerkez Residence 8A1/515 / Ulus Mah' +
                    'Beşiktaş / İSTANBUL / TURKEY'
            },
            {
                "title": 'RD Global USA INC',
                "lat": '28.2626771',
                "lng": '-81.622119',
                "description": '8297 ChampionsGate #431 ChampionsGate, Florida 33896 / USA'
            },
            {
                "title": 'RD Global EUROPE',
                "lat": '51.4459043',
                "lng": '5.4044679',
                "description": 'Zandroos 38 / 5658 BG.Eindhoven/ NETHERLANDS'
            },
            {
                "title" : 'RD GLOBAL',
                "lat":'-33.8473567',
                "lng":'150.6517955',
                "description" :'AUSTRALIA / SYDNEY'
            },
            {
                "title" : 'RD Global EUROPE',
                "lat":'-24.6082272',
                "lng":'-47.4783847',
                "description" :'BRASİL / RİO'
            },
            {
                "title" : 'RD GLOBAL',
                "lat":'-19.0206372',
                "lng":'-65.3298327',
                "description" :'BOLIVIA / SUCRE'
            },
            {
                "title" : 'RD Global EUROPE',
                "lat":'51.5287718',
                "lng":'-0.2416804',
                "description" :'ENGLAND / LONDON'
            },
            {
                "title" : 'RD GLOBAL',
                "lat":'15.711383',
                "lng":'-92.4791813',
                "description" :'GUATEMALA'
            },
            {
                "title" : 'RD GLOBAL',
                "lat":'20.7711247',
                "lng":'73.7287618',
                "description" :'INDIA'
            },
            {
                "title" : 'RD Global EUROPE',
                "lat":'41.2118863',
                "lng":'8.2236639',
                "description" :'ITALY'
            },
            {
                "title" : 'RD Global EUROPE',
                "lat":'51.935837',
                "lng":'16.8920779',
                "description" :'POLAND'
            },
            {
                "title" : 'RD GLOBAL',
                "lat":'38.7774969',
                "lng":'-9.4034757',
                "description" :'PORTUGAL'
            },
            {
                "title" : 'RD GLOBAL',
                "lat":'44.4725908',
                "lng":'18.4989921',
                "description" :'SERBIA'
            },
           {
            "title" : 'RD GLOBAL',
            "lat":'40.4381311',
            "lng":'-3.8196196',
            "description" :'SPAIN'
           },
            {
                "title" : 'RD GLOBAL',
                "lat":'-33.3597486',
                "lng":'17.9213744',
                "description" :'SOUTH AFRICA'
            },
            {
                "title" : 'RD GLOBAL',
                "lat":'25.0174719',
                "lng":'121.3662937',
                "description" :'TAIWAN'
            },
            {
                "title" : 'RD GLOBAL',
                "lat":'24.3776367',
                "lng":'54.650888',
                "description" :'UAE'
            },
            {
                "title" : 'RD GLOBAL',
                "lat":'44.6576311',
                "lng":'28.4586484',
                "description" :'UKRAINE'
            },
            {
                "title" : 'RD GLOBAL',
                "lat":'47.4813602',
                "lng":'18.9902207',
                "description" :'HUNGARY'
            },
            {
                "title" : 'RD GLOBAL',
                "lat":'1.3439166',
                "lng":'103.7540048',
                "description" :'SINGAPORE'
            },
            {
                "title" : 'RD GLOBAL',
                "lat":'37.5652894',
                "lng":'126.8494667',
                "description" :'SOUTH KOREA'
            },
            {
                "title" : 'RD GLOBAL',
                "lat":'21.0227788',
                "lng":'105.8194541',
                "description" :'VIETNAM'
            },
            {
                "title" : 'RD GLOBAL',
                "lat":'13.7248936',
                "lng":'100.4930261',
                "description" :'THAILAND'
            },
            {
                "title" : 'RD GLOBAL',
                "lat":'48.1359244',
                "lng":'16.9758349',
                "description" :'SLOVAKIA'
            },


        ];
        window.onload = function () {
            LoadMap();
        }
        function LoadMap() {
            var mapOptions = {
                center: new google.maps.LatLng(markers[0].lat, markers[0].lng),
                zoom: 3,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);

            //Create and open InfoWindow.
            var infoWindow = new google.maps.InfoWindow();

            for (var i = 0; i < markers.length; i++) {
                var data = markers[i];
                var myLatlng = new google.maps.LatLng(data.lat, data.lng);
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: data.title,

                });




                //Attach click event to the marker.
                (function (marker, data) {
                    google.maps.event.addListener(marker, "click", function (e) {
                        //Wrap the content inside an HTML DIV in order to set height and width of InfoWindow.
                        infoWindow.setContent("<div class='text-center badge badge-quaternary badge-md text-2 ' style =width:100%;min-height:40px>" + data.title +"<br>" +"<div class='badge badge-quaternary badge-md text-1 '>" +data.description+"</div></div>");
                        infoWindow.open(map, marker);
                    });
                })(marker, data);
            }
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhxBCJh9XbdRSGePnIBQaN2c8ye2j6g3c&callback=initMap"
            async defer></script>
@endsection
