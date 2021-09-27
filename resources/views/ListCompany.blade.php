@extends('layouts.auth')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Dashboard</div>
<div class="card-body">Hi boss!{{Auth::guard('admin')->user()->name}} 
        <form method="POST" action="/searchCompany">
            @csrf
        <div class="input-group md-form form-sm form-2 pl-0">
                <input class="form-control my-0 py-1 red-border" type="text" name='q' placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <span class="input-group-text red lighten-3" id="basic-text1"><i class="fas fa-search text-grey" aria-hidden="true"></i></span>
                </div>
              </div>
        </form>
    <table class="table table-hover">
            @if(isset($data))
            @foreach($data as $data)
        <thead>
            <tr>
            
                <th>Name</th>
                <th>Email</th>
                <th>Delete</th>
               
                
               
            </tr>
        </thead>
        <tbody>
               
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td><a href="/deleteCompany/{{$data->id}}">Delete</a>
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
@endsection