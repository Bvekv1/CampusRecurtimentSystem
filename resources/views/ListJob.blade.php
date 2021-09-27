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
        <form method="POST" action="/searchJob">
            @csrf
        <div class="input-group md-form form-sm form-2 pl-0">
                <input class="form-control my-0 py-1 red-border" type="text" name='q' placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <span class="input-group-text red lighten-3" id="basic-text1"><i class="fas fa-search text-grey" aria-hidden="true"></i></span>
                </div>
              </div>
        </form>
        @if(isset($users))
       
 <table class="table table-striped table-dark">
        
        <thead>
            <tr>
            
                <th>JobRole</th>
                <th>JobPosition</th>
                <th>Department</th>
                <th>Location</th>
                <th>Skills</th>
                <th>Salary</th>
                <th>Delete</th>
            </tr>
        </thead>
       
        <tbody>
                @foreach($users as $user) 
            <tr>
                <td>{{$user->JobRole}}</td>
                <td>{{$user->PositionLevel}}</td>
                <td>{{$user->Department}}</td>
                <td>{{$user->Location}}</td>
                <td>{{$user->Skills}}</td>
                <td>{{$user->Salary}}</td>
                <td><a href="/deleteJob/{{$user->id}}">Delete</a>
               
            </tr>
           
           
        </tbody>
        @endforeach
        @else
        {{$message}}
        @endif
    </table>
    
      </div>  



</div>
</div>
</div>
</div>
</div>
@endsection