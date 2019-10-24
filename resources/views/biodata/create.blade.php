@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>New Task</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops! </strong> there where some problems with your input.<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('biodata.store')}}" method="post">
      @csrf
      <div class="row">
        <div class="col-md-12 p-3">
          <strong>Task Name :</strong>
          <input type="text" name="task_name" class="form-control" placeholder="Type Your Task">
        </div>
        <div class="col-md-12">
          <strong>Information :</strong>
          <textarea class="form-control" placeholder="Type Your Information" name="information" rows="8" cols="80"></textarea>
        </div>

        <div class="col-md-12 p-3">
          <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection
