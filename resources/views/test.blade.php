@extends('layouts.auth')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Dashboard</div>
<div class="card-body">
Here is the resume you can download it<?php if (Auth::guard('student')->check()) {
    // The user is logged in...
    $id = Auth::guard('student')->user()->id;
}
?>
@foreach ($data as $data)
<table class="table table-hover">
  <thead>
    <tr>
       
        <th>cv</th>
     
        </tr>
        </thead>
        <tbody>
         <tr>
    
    <td>Resume</td>
 
         <td><a href="/uploads/cv/{{$data->cv}}" download="{{$data->cv}}" ><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-download">Download</i></button></a></td>
      </tr>
     </tbody>
  </table>
@endforeach



</div>
</div>
</div>
</div>
</div>
@endsection