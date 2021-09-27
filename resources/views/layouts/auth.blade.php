<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'Laravel') }}</title>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Fonts -->
<link rel="dns-prefetch" href="https://fonts.gstatic.com">

<link
href="https://fonts.googleapis.com/css?family=Raleway:300,400,600"
rel="stylesheet" type="text/css">
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
    .input-group.md-form.form-sm.form-2 input {
    border: 1px solid #bdbdbd;
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}
.input-group.md-form.form-sm.form-2 input.red-border  {
    border: 1px solid #ef9a9a;
}
.input-group.md-form.form-sm.form-2 input.lime-border  {
    border: 1px solid #cddc39;
}
.input-group.md-form.form-sm.form-2 input.amber-border  {
    border: 1px solid #ffca28;
}
    </style>
</head>
<body>
<div id="app">
<nav class="navbar navbar-expand-md navbar-light navbarlaravel">
<div class="container">
<a class="navbar-brand" href="{{ url('/') }}">
{{ config('app.name', 'Laravel') }}
</a>
<button class="navbar-toggler" type="button" datatoggle="collapse" data-target="#navbarSupportedContent" ariacontrols="navbarSupportedContent" aria-expanded="false" aria-label="{{
__('Toggle navigation') }}">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse"
id="navbarSupportedContent">
<!-- Left Side Of Navbar --><ul class="navbar-nav mr-auto">
</ul>
<!-- Right Side Of Navbar -->
 <h1>Student Recurtiment System</h1>
<ul class="navbar-nav ml-auto">
 
<!-- Authentication Links -->
<li class="nav-item dropdown">
    
<a id="navbarDropdown" class="nav-link
dropdown-toggle" href="#" role="button" data-toggle="dropdown" ariahaspopup="true" aria-expanded="false" v-pre>
Menu <span class="caret"></span>
</a>

<div class="dropdown-menu dropdown-menuright" aria-labelledby="navbarDropdown">

@if (Auth::guard('student')->check())
<a class="dropdown-item" href='/student'>Home</a>
 <a class="dropdown-item" href='/editProfileStudent/{{Auth::guard('student')->user()->id}}' >Edit Profile</a>
 <a class="dropdown-item" href='/viewJobStudent' >View Job</a>
 <a class="dropdown-item" href='/profile'>upload Image</a>
 <a class="dropdown-item" href='/add'>Add CV</a>
 <a class="dropdown-item" href='/studentResume/{{Auth::guard('student')->user()->id}}'>View CV</a>
 @elseif(Auth::check())
 <a class="dropdown-item" href='/home'>Home</a>
 <a class="dropdown-item" href='/postJob'>Post Job</a>
 <a class="dropdown-item" href='/viewJob/ {{Auth::user()->id}}'>View Job</a>
 <a class="dropdown-item" href='/editProfileCompany/{{Auth::User()->id}}'>Edit Profile</a>
 <a class="dropdown-item" href='/viewApplicant/{{Auth::User()->id}}'>View Aplicant</a>
 @elseif(Auth::guard('admin')->check())
 <a class="dropdown-item" href='/admin'>Home</a>
 <a class="dropdown-item" href='/companyList'>Comapny List</a>
 <a class="dropdown-item" href='/studentList'>Student List</a>
 <a class="dropdown-item" href='/jobList'>Job List</a>
 <a class="dropdown-item" href='/applicationList'>Application List</a>
@endif
<a class="dropdown-item" href="{{
  route('logout') }}"
  onclick="event.preventDefault();
  document.getElementById('logout-form').submit();">
  {{ __('Logout') }}
  </a>
  <form id="logout-form" action="{{
  route('logout') }}" method="POST" style="display: none;">
  @csrf
  </form>

</div>
</li>


</ul>
</div>
</div>
</nav>
<main class="py-4">
@yield('content')
</main>
</div>
<footer class="page-footer font-small blue" style="position: fixed;
left: 0;
bottom: 0;
width: 100%;
background-color: black;
color: white;
text-align: center;">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© {{date('m,d,y')}} Copyright:
          <a href="https://mdbootstrap.com/education/bootstrap/">StudentRecurtimentSystem</a>
        </div>
        <!-- Copyright -->
      
      </footer>
</body>
</html>