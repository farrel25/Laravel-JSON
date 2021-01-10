@extends('master', ['title' => 'JSON Designed'])

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">

        <a class="navbar-brand" href="{{ route('json-with-bootstrap') }}">JSON Designed</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
            </ul>
        </div>

    </div>
</nav>

<div class="container">

    <div class="row mt-4">
        <div class="col-md">
            <h2>All Data</h2>
        </div>
    </div>

    <div class="row mt-4">
        @foreach ($menus as $menu)
        <div class="col-md-4">
            <div class="card mb-4" style="width: 18rem;">
                <img src="{{ asset('/images/pizza/' . $menu['gambar']) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $menu['nama'] }}</h5>
                    <p class="card-text text-muted">{{ $menu['deskripsi'] }}</p>
                    <h5 class="card-text">Rp. {{ $menu['harga'] }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection
