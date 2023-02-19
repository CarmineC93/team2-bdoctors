@extends('layouts.navigation')

@section('content')
    <h2>Reviews</h2>

    <a class="btn btn-light" href="{{ url()->previous() }}">Back</a>

    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Username</th>
                <th scope="col">vote</th>
                <th scope="col">Show</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reviews as $review)
                <tr>
                    <th scope="row">{{ $review->username }}</th>
                    <td>{{ $review->vote }}</td>
                    <td><a class="btn btn-primary" href="{{ route('reviews.show', $review->id) }}">Show</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
