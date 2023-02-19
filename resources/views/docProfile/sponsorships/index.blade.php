@extends('layouts.navigation')



@section('content')
    <div class='container'>
        @foreach ($promos as $promo)
            <div>
                <h2>{{ $promo->name }}</h2>
                <p>{{ $promo->price }}</p>

                <p>{{ $promo->duration }}</p>
                <button>
                    <a href="{{ route('promos.show', $promo->id) }}"> Acquista </a>
                </button>
            </div>
        @endforeach
    </div>
@endsection
