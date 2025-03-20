@extends('layouts.app')

@section('content')
<div class ="container ">
	<h1 class="display-5 fw-bold text-body-emphasis">Add New Property</h1>
	
	<form action="{{ url('/properties') }}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label for= "title"> Property Title: </label>
			<input type="text" class="form-control" id="title" name="title" required/> br></br>
		</div>
		<div class="form-group">
			<label for= "description"> Description: </label>
			<textarea name="description" class="form-control" id="description"  required/> <br></br>
		</div>
		<div class="form-group">
			<label for= "room"> No. of Rooms: </label>
			<input type="text" id="room" class="form-control" name="room" placeholder="3" required/> 
			<br></br>
		</div>
		<div class="form-group">
			<label for= "bathroom"> No. of Bathrooms: </label>
			<input type="text" id="bathroom" class="form-control" name="bathroom" placeholder="2"  required/> <br></br>
		</div>
		<div class="form-group">
			<label for= "price"> Price: </label>
			<input type="text" class="form-control" id="price" name="price" placeholder="15,000,000" required/> <br></br>
		</div>
		<div class="form-group">
			<label for= "property_type"> Property Type: </label>
			<select name="proprty_type" required>
				<option value="House">House</option>
				<option value="Apartment">Apartment</option>
			</select>
		</div>
		<div class="form-group">
			<label for= "location"> Location: </label>
			<input type="text" class="form-control" id="location" name="location" required/> <br></br>
		</div>
		<div class="form-group">
			<label for= "photo"> Photo: </label>
			<input type="file" class="form-control" id="photo" name="photo" required/> 
			<br></br>
		</div>
		<button type="submit" class="btn btn-primary">Add Property</button>
	</form>
</div>
@endsection