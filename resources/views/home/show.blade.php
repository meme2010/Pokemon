@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">{{ $pokemon->name }}</h1>
        <div class="row">
            <div class="col-md-8">

                <img class="img-fluid w-50" src="{{ $pokemon->sprites->front_default }}" alt="">
                @foreach($pokemon->sprites as $image)


                @endforeach

            </div>
            <div class="col-md-4">
                <h3 class="my-3">{{ $pokemon->name }} Abilities</h3>
                @foreach($pokemon->abilities as $poke)
                    <ul>
                        <li>{{ $poke->ability->name }}</li>
                    </ul>
                @endforeach
                <h3 class="my-3">{{ $pokemon->name }} Moves</h3>
                @foreach($pokemon->moves as $poke)
                    <ul>
                        <li>{{ $poke->move->name }}</li>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
@endsection
