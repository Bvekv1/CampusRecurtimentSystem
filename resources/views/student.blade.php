@extends('layouts.auth')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Dashboard</div>
<div class="card-body">
Hi there, user {{Auth::guard('student')->user()->name}} 
<br><br>
<a href='/editProfileStudent/{{Auth::guard('student')->user()->id}}'><button type="submit" class="btn btn-primary">Edit Profile</button></a><br><br>
<a href='/viewJobStudent'><button type="submit" class="btn btn-primary">View Job</button></a><br><br>
<a href='/profile'><button type="submit" class="btn btn-primary">Upload Image</button></a><br><br>
<a href='/add'><button type="submit" class="btn btn-primary">Add CV</button></a><br><br>
<a href='/studentResume/{{Auth::guard('student')->user()->id}}'><button type="submit" class="btn btn-primary">View CV</button></a>


</div>
</div>
</div>
</div>
</div>
@endsection