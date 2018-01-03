@extends('layouts.app')
@section('content')
<h5 style="padding-top: 20px;" class="text-center">YCOptimum Design</h5>
<div style="padding: 20px 40px 20px 40px;">
    <form method="post" action="{{ url('admin/add/ycodesign/residential') }}">
      {{ csrf_field() }}
      <input type="text" name="ydResGroup" class="form-control" required>
      <br>
      <button type="submit" class="btn btn-primary">Add New Group</button>
      <br>
      <h6>Choose Group</h6>
      <select class="form-control" id="chosenGroupName">
        @foreach($ycoDesignGroups as $ycoDesignGroup)
          <option value="{{ $ycoDesignGroup->groupName }}">{{ $ycoDesignGroup->groupName }}</option>
        @endforeach
      </select>
    </form>
</div>

<div style="padding: 20px 40px 20px 40px;">
  <h6>Residential</h6>
  <div class="dropzone" id="dropzoneResYD"></div>
</div>

<div style="padding: 20px 40px 20px 40px;">
  <h6>Offices</h6>
  <div class="dropzone" id="dropzoneOffYD"></div>
</div>

<div style="padding: 20px 40px 20px 40px;">
  <h6>Retail/Commercial</h6>
  <div class="dropzone" id="dropzoneRetYD"></div>
</div>

<div style="padding: 20px 40px 20px 40px;">
  <h6>Files</h6>
  @foreach($ycoDesignImages as $ycoDesignImage)
    <div class="row">
      <div class="col-md-3">
        <h6>{{ $ycoDesignImage->subgroup }}</h6>
      </div>
      <div class="col-md-3">
        <h6>{{ $ycoDesignImage->projectName }}</h6>
      </div>
      <div class="col-md-3">
        <h6>{{ $ycoDesignImage->image }}</h6>
      </div>
      <div class="col-md-3">
        <a href="{{ url('admin/delete/ycodesign') }}/{{ $ycoDesignImage->id }}">Delete</a>
      </div>
    </div>
  @endforeach
</div>
@endsection