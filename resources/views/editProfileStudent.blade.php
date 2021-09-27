@extends('layouts.auth')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Dashboard</div>
<div class="card-body">
Hi there, {{Auth::guard('student')->user()->name}}  Update Your Profile

    @if(isset($data))
    @foreach($data as $data)
    <img src="/uploads/avatars/{{$data->avatar}}" style="width:50px; height:50px; float:left; border-radius:50%; margin-right:25px;"><br><br><br>
    <form method="GET" action="/updateStudentProfile/{{$data->id}}">
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