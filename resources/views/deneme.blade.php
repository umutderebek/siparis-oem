
@foreach($product as $pro)

    @if($pro->renk == '')
        <p> {{$pro->id}} = blosluk var abi</p>
        @endif
    <p> {{$pro->id}} = {{$pro->renk}}</p>

    @endforeach
