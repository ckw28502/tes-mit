@extends("master")
<!-- Title -->
@section("title","Login")
<!-- CSS -->
@section('css')
    <style>
        #splash-screen{
            background-color:rgb(210, 210, 210);
        }
        #circle{
            background-color:gray;
        }
        #login{
            top:10%;
            background-color :white;
            opacity: 70%;
            left:5%;
        }
    </style>
@endsection
@section('body')
    <!-- Splash-Screen -->
    <div id="splash-screen" class="position-fixed w-100 h-100 d-flex">
        <div class=" position-fixed h-100 w-100 d-flex justify-content-center align-items-center">
            <div id="circle" class="rounded-circle w-25 h-25">
                <h2 class="d-flex position-fixed h-25 w-25 justify-content-center align-items-center">Artsy</h2>
            </div>
        </div>
    </div>
    <!-- Login Page -->
    <div id="login" class="container d-none position-absolute justify-content-center h-50 col-10 rounded py-5">
        <div class="d-inline">
            <h1>Login</h1>
            <center>
                <div class="form-outline col-md-10 col-lg-8">
                    <input type="text" id="username" class="form-control" />
                    <label class="form-label" for="username">Username</label>
                </div>
                <div class="form-outline col-md-10 col-lg-8">
                    <input type="password" id="password" class="form-control" />
                    <label class="form-label" for="password">Password</label>
                </div>
                <a href="/home"><button class="btn btn-success" onclick="Login()">Login</button></a>
            </center>
        </div>
@endsection
<!-- Javascript -->
@section('js')
    <script>
        // Splash Screen timer
        $(document).ready(new function () { 
            setInterval(() => {
                $("#splash-screen").addClass("d-none").removeClass("d-flex");
                $("#login").addClass("d-flex").removeClass("d-none");
                $("body").css("background-color","gray");
            }, 500);
         })
        function Login(){
            fetch('https://fakestoreapi.com/auth/login',{
            method:'POST',
            body:JSON.stringify({
                username: "mor_2314",
                password: "83r5^_"
            })
        })
            .then(res=>res.json())
            .then(json=>console.log(json))
            }

    </script>
@endsection
