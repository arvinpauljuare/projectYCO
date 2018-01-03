@extends('layouts.app')
@section('content')
	<form method="POST" action="{{ url('admin/add/info') }}">
		{{ csrf_field() }}
		<div style="padding: 20px 60px 20px 60px;">
			<div class="row">
				<h6>Email</h6>
				<input class="form-control" type="email" name="email" value="{{ $ycoInfo->email }}" required>
			</div>

			<div class="row">
				<h6>Location</h6>
				<input class="form-control" type="text" name="location" value="{{ $ycoInfo->location }}" required>
			</div>

			<div class="row">
				<h6>Number</h6>
				<input  class="form-control"type="text" name="number" value="{{ $ycoInfo->number }}" required>
			</div>

			<div class="row text-center" style="margin-top: 20px;">
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
		</div>
	</form>
@endsection