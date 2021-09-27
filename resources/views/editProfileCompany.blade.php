@extends('layouts.auth')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Dashboard</div>
<div class="card-body">
Hi there, Update Your Profile
<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div>  
    @if(isset($data))
    @foreach($data as $data)
    <form method="GET" action="/updateCompanyProfile/{{$data->id}}">
    @csrf
    
    <div class="form-group">
        <label for="inputName">Name</label>
        <input type="text" class="form-control" id="inputName" name="Name" value ="{{$data->name}}" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" name="Email" value="{{$data->email}}" placeholder="Email">
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