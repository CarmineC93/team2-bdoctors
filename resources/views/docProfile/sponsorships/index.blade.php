@extends('layouts.navigation')

<div class='container'>
    <div>
        <h2>PROMO 1DAY</h2>
        <p>2,99 € per 24 ore di sponsorizzazione</p>
        <button>
            <a href="{{ route('orders/generate') }}"> Acquista </a>
        </button>
    </div>
    <div>
        <h2>PROMO 3DAYS</h2>
        <p>5.99 € per 72 ore di sponsorizzazione/p>
            <button>
                <a href="{{ route('orders/generate') }}"> Acquista </a>
            </button>
    </div>
    <div>
        <h2>PROMO 1WEEK</h2>
        <p>9.99 € per 144 ore di sponsorizzazione</p>
        <button>
            <a href="{{ route('orders/generate') }}"> Acquista </a>
        </button>
    </div>


</div>

@section('content')
@endsection
