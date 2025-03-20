@extends('layouts.app')

@section('content')

@if ($property->photo)
    <img src="{{ asset('storage/' . $property->photo) }}" width="200">
@endif
<h1>{{ $property->title }}</h1>
<p>{{ $property->description }}</p>
<p>{{ $property->num_of_bedrooms }}</p>
<p>{{ $property->num_of_bathrooms }}</p>
<p>{{ $property->location }}</p>
<p>Price: ${{ $property->price }}</p>
<p>{{ $property->property_type }}</p>

<button class="btn btn-primary mt-3">Email Realtor</button>

@endsection


