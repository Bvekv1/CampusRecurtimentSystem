<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <title>StudentRecurtimentSystem</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: snow;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
               
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            #red{
                background-color: beige;
            }
            #check{
                padding-left: 20px;
                
            }
            #check a{
                padding-left: 30%;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
            @if (Route::has('login'))
                <div class="top-right links">
                        <a href="/uploads/manual/usermanual.pdf" open="usermanual.pdf">UserManual</a>
                        <a href="/login/student">Student Login</a>
                        <a href="/register/student">Register Student</a>
                        <a href="/login/admin">Admin Login</a>
                        <a href="/register/admin">Admin Register</a>
                        
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Company Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Company Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Welcome to Student Recurtiment System
                
                </div>

                
            </div>
         
        </div>
        <footer class="page-footer font-small blue" style="position: fixed;
left: 0;
bottom: 0;
width: 100%;
height:50px;
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
