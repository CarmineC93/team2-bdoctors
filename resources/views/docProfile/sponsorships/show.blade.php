@extends('layouts.navigation')

@section('content')
    <script src="https://js.braintreegateway.com/web/dropin/1.33.7/js/dropin.js"></script>

    <div id="dropin-container"></div>
    <button id="submit-button" class="button button--small button--green">Purchase</button>
@endsection
