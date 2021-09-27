

@extends('layouts.auth')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Dashboard</div>
<div class="card-body">
Hi there, user {{Auth::guard('student')->user()->name}} 

<form action="/uploadfile/{{Auth::guard('student')->user()->id}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <input type="file" class="form-control-file" name="fileToUpload" id="exampleInputFile" aria-describedby="fileHelp">
        <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
     
    
</form>
@if(isset($message))
{{$message}}
@endif


</div>
</div>
</div>
</div>
</div>
@endsection