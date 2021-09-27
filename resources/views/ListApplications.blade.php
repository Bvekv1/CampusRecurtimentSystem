@extends('layouts.auth')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Dashboard</div>
<div class="card-body">
    Hi boss!{{Auth::guard('admin')->user()->name}}
        @if (count($errors) >0)
 @foreach($errors->all() as $error)
 <li>{{$error}} </li>
 @endforeach
@endif

<table class="table table-striped table-dark">
      
    <thead class="thead-dark">
        <tr>
            
            <th>Name</th>
            <th>Email</th>
            <th>Resume</th>
            <th>Delete</th>
            
            
        </tr>
    </thead>
    <tbody>
            @if(isset($users))
            @foreach($users as $user)
        <tr>
            <td>{{$user->Name}}</td>
            <td>{{$user->Email}}</td>
            <td><a href="/studentResume/{{$user->id}}">{{$user->Name}}_Resume</a></td>
            <td><a href="/deleteApplicantAdmin/{{$user->id}}">Delete</a></td>
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