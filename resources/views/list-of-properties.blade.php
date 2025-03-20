extends('layouts.app')

@section('content')

<h1 class="display-5 fw-bold text-body-emphasis">Properties</h1>

@foreach ($properties as $property)
    <div class="card mb-3" style="max-width: 600px;">
        <div class="row g-0">

            @if ($property->photo)
                <div class="col-md-4">
                    <img src="{{ asset('storage/' . $property->photo) }}" class="img-fluid rounded-start" alt="Property Photo">
                </div>
            @endif

            <div class="col-md-{{ $property->photo ? '8' : '12' }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $property->title }}</h5>
                    <p class="card-text"><strong>Location:</strong> {{ $property->location }}</p>
                    <p class="card-text"><strong>Price:</strong> ${{ number_format($property->price, 2) }}</p>

                    <a href="{{ url('/properties/' . $property->id) }}" class="btn btn-primary">View Property</a>
                </div>
            </div>
        </div>
    </div>
@endforeach

@endsection

