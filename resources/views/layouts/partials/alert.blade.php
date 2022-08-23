@if (session()->has('mesaj'))

    <div class="container text-center">
        <div class="alert alert-{{session('mesaj-tur')}}">{{session('mesaj')}}</div>
    </div>
@endif
