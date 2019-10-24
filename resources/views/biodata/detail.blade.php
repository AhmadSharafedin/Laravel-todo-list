@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Task Details</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Task Name : </strong> {{$biodata->task_name}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Information : </strong> {{$biodata->information}}
        </div>
      </div>
      <div class="col-md-12">
        <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection
