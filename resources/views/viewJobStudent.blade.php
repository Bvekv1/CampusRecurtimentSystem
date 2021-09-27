@extends('layouts.auth')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Dashboard</div>
<div class="card-body">
        {{Auth::guard('student')->user()->name}}
        @if (count($errors) >0)
 @foreach($errors->all() as $error)
 <li>{{$error}} </li>
 @endforeach
@endif
<form method="POST" action="/searchJob">
    @csrf
<div class="input-group md-form form-sm form-2 pl-0">
        <input class="form-control my-0 py-1 red-border" type="text" name='q' placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <span class="input-group-text red lighten-3" id="basic-text1"><i class="fas fa-search text-grey" aria-hidden="true"></i></span>
        </div>
      </div>
</form>
<form method="POST" action="/applyJob">
@csrf
<div class="form-group">
  
    <input type="hidden" class="form-control" id="inputName" name="Name" value="{{Auth::guard('student')->user()->name}}" placeholder="JobRole">
</div>
<div class="form-group">
   
    <input type="hidden" class="form-control" id="inputEmail" name="Email" value="{{Auth::guard('student')->user()->email}}" placeholder="Email">
</div>
@if(isset($users))
<table class="table table-striped table-dark">
      
    <thead class="thead-dark">
          
           
        <tr>
            
            <th>JobRole</th>
            <th>JobPosition</th>
            <th>Department</th>
            <th>Location</th>
            <th>Skills</th>
            <th>Salary</th>
            <th>Apply</th>
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
            <input type="hidden" class="form-control" id="companyUserId" name="CompanyUserId" value="{{$user->CompanyUserId}}">
            <td><button type="submit" class="btn btn-primary">Apply</button></td>
        
        </tr>
       
       
    </tbody>
    @endforeach
    @else
    {{$message}}
    @endif
</table>


</form>

      </div>  



</div>
</div>
</div>
</div>
</div>
@endsection