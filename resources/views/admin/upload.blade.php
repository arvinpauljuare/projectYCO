@extends('layouts.app')
@section('content')
<h5 style="padding-top: 20px;" class="text-center">TheOptimum R. Fit-out Inc.</h5>
<div style="padding: 20px 40px 20px 40px;">
    <form method="post" action="{{ url('admin/add/optimum/residential') }}">
      {{ csrf_field() }}
      <input type="text" name="optResGroup" class="form-control" required>
      <br>
      <button type="submit" class="btn btn-primary">Add New Group</button>
      <br>
      <h6>Choose Group</h6>
      <select class="form-control" id="chosenGroupName">
        @foreach($optimumGroups as $optimumGroup)
          <option value="{{ $optimumGroup->groupName }}">{{ $optimumGroup->groupName }}</option>
        @endforeach
      </select>
    </form>
</div>

<div style="padding: 20px 40px 20px 40px;">
  <h6>Residential</h6>
  <div class="dropzone" id="dropzoneRes"></div>
</div>

<div style="padding: 20px 40px 20px 40px;">
  <h6>Offices</h6>
  <div class="dropzone" id="dropzoneOff"></div>
</div>

<div style="padding: 20px 40px 20px 40px;">
  <h6>Retail/Commercial</h6>
  <div class="dropzone" id="dropzoneRet"></div>
</div>

<div style="padding: 20px 40px 20px 40px;">
  <h6>Files</h6>
  @foreach($optimumImages as $optimumImage)
    <div class="row">
      <div class="col-md-3">
        <h6>{{ $optimumImage->subgroup }}</h6>
      </div>
      <div class="col-md-3">
        <h6>{{ $optimumImage->projectName }}</h6>
      </div>
      <div class="col-md-3">
        <h6>{{ $optimumImage->image }}</h6>
      </div>
      <div class="col-md-3">
        <a href="{{ url('admin/delete/optimum') }}/{{ $optimumImage->id }}">Delete</a>
      </div>
    </div>
  @endforeach
</div>
@endsection