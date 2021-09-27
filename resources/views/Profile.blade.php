@extends('layouts.auth')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Dashboard</div>
<div class="card-body">
{{$user->name}}Profile
<img src="/uploads/avatars/{{$user->avatar}}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
<form enctype="multipart/form-data" action="/profile" method="POST">
    <input type="file" name="avatar">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" class="pull-right btn btn-sm btn-primary">
</form>

</div>
</div>
</div>
</div>
</div>
@endsection