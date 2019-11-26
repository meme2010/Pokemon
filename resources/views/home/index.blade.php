@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Pokemon</div>
                <div class="card-body">
                    @foreach( $pokemons->results as $pokemon )
                        <div class="card d-flex" style="width: 18rem;">
                            <div class="card-body">
                                <a href="/home/{{ $pokemon->name }}">
                                    <h5 class="card-title">{{ $pokemon->name }}</h5>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
