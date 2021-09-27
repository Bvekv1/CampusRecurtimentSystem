@extends('layouts.auth')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Dashboard</div>
<div class="card-body">Hi boss!{{Auth::guard('admin')->user()->name}} <br><br>
    <a href='/companyList'><button type="submit" class="btn btn-primary">Company List</button></a><br><br>
    <a href='/studentList'><button type="submit" class="btn btn-primary">Student List</button></a><br><br>
    <a href='/jobList'><button type="submit" class="btn btn-primary">Job List</button></a><br><br>
    <a href='/applicationList'><button type="submit" class="btn btn-primary">Application List</button></a><br><br>
    

   
</div>
</div>
</div>
</div>
</div>
@endsection