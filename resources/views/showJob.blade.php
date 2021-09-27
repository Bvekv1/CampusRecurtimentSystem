@extends('layouts.auth')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Dashboard</div>
<div class="card-body">
        @if (count($errors) >0)
 @foreach($errors->all() as $error)
 <li>{{$error}} </li>
 @endforeach
@endif

<div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
          @if(Session::has('alert-' . $msg))
    
          <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
          @endif
        @endforeach
      
 <table class="table table-striped table-dark">
        @if(isset($users))
        @foreach($users as $user) 
        <thead>
            <tr>
            
                <th>JobRole</th>
                <th>JobPosition</th>
                <th>Department</th>
                <th>Location</th>
                <th>Skills</th>
                <th>Salary</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>
      
        <tbody>
               
            <tr>
                
                <td>{{$user->JobRole}}</td>
                <td>{{$user->PositionLevel}}</td>
                <td>{{$user->Department}}</td>
                <td>{{$user->Location}}</td>
                <td>{{$user->Skills}}</td>
                <td>{{$user->Salary}}</td>
                <td><a href="/deleteJob/{{$user->id}}">Delete</a>
                <td><a href="/updateJob/{{$user->id}}">Update</a>
            </tr>
           
           
        </tbody>
        @endforeach
        @endif
    </table>
  
      </div>  



</div>
</div>
</div>
</div>
</div>
@endsection