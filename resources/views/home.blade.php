@extends('layouts.auth')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Dashboard</div>
<div class="card-body">
Hi there, user {{Auth::user()->name}}  <br><br>
<a href='/postJob'><button type="submit" class="btn btn-primary">Post Job</button></a><br><br>
<a href='/viewJob/ {{Auth::user()->id}}'><button type="submit" class="btn btn-primary">View Job</button></a><br><br>
<a href='/editProfileCompany/{{Auth::User()->id}}'><button type="submit" class="btn btn-primary">Edit Profile</button></a><br><br>
<a href='/viewApplicant/{{Auth::User()->id}}'><button type="submit" class="btn btn-primary">View Aplicant</button></a><br><br>
</div>
</div>
</div>
</div>
</div>
@endsection