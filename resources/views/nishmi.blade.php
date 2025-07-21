@extends('layouts.app')

@section('title', 'Available Treks')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Available Treks</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($treks->count())
        <div class="row">
            @foreach($treks as $trek)
                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $trek->name }}</h5>
                            <p class="card-text">
                                Price: Rs. {{ number_format($trek->price) }} <br>
                                Duration: {{ $trek->days }} days
                            </p>
                            <a href="{{ route('treks.show', $trek->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>No treks available at the moment.</p>
    @endif
</div>
@endsection
