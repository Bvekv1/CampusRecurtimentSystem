@extends('layouts.auth')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Dashboard</div>
<div class="card-body">

<div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
          @if(Session::has('alert-' . $msg))
    
          <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
          @endif
        @endforeach
      </div>  
      @if(isset($data))
    @foreach($data as $data)
    <form method="GET" action="/update/{{$data->id}}">
    @csrf
    
    <div class="form-group">
        <label for="inputJobRole">JobRole</label>
        <input type="text" class="form-control" id="inputJobRole" name="JobRole" value ="{{$data->JobRole}}" placeholder="JobRole">
    </div>
    <div class="form-group">
        <label for="inputPositionLevel">PositionLevel</label>
        <input type="text" class="form-control" id="inputPositionLevel" name="PositionLevel" value="{{$data->PositionLevel}}" placeholder="PositionLevel">
    </div>
    <div class="form-group">
        <label for="inputDepartment">Department</label>
        <input type="text" class="form-control" id="inputPositionLevel" name="Department" value="{{$data->Department}}" placeholder="Department">
    </div>
    <div class="form-group">
        <label for="inputLocation">Location</label>
        <input type="text" class="form-control" id="inputLocation" name="Location" value="{{$data->Location}}" placeholder="Location">
    </div>
    <div class="form-group">
        <label for="inputSkills">Skills</label>
        <input type="text" class="form-control" id="inputSkills" name="Skills" value="{{$data->Skills}}" placeholder="Skills">
    </div>
    <div class="form-group">
        <label for="inputSalary">Salary</label>
        <input type="number" class="form-control" id="inputSalary" name="Salary" value="{{$data->Salary}}" placeholder="Salary">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    
    @endforeach
        @endif
</form>


</div>
</div>
</div>
</div>
</div>
@endsection