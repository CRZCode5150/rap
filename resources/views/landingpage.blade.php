<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css" />
    <link href="https://fonts.googleapis.com/css?family=Joti+One" rel="stylesheet">
</head>
<div class="container-fluid figure">
    <div id="main" class="row is-loading">
        <div class="col ">



            <div class="A2 row text-center">
                <div class="A3 col-6">
                    <h1>Sign Up as a Artist!</h1>
                    <a href="/signupartist"><button type="button" class="A3 btn btn-danger">Count me in!</button></a>
                </div>
                <div class="A3 col-6">
                    <h1>Sign Up as a Fan!</h1>
                    <a href="/signupfan"><button type="button" class="A3 btn btn-danger">Lets go!</button> </a>
                </div>
            </div>

            <div class="row text-center">
                <div class="col">
                    <h1 class="A1">
                        Rap-it-Up
                    </h1>
                </div>
            </div>

            <div class="A4 row text-center">

                <div class="A3 col-6">
                    <div id="login">
                        <h1 class="A7" align="center">Login Artists</h1>
                        <div id="loginbox" class="box">
                            <i id="icon" class="fa fa-power-off"></i>
                            <form method="POST" action="/login">
                                @csrf
                                <div id="form-container">
                                    <input class="text" id="logintext" type="text" placeholder="Username" size="27" name="username"><i id="logintext" class="clear icon fa fa-times"></i>
                                    <br>
                                    <br>
                                    <input class="text" id="loginpass" type="password" placeholder="Password" size="27" name="password"><i id="loginpass" class="clear icon fa fa-times"></i>
                                    <br>
                                    <br>
                                    <button type="submit" class="btn draw-border">Fans!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="A3 col-6">
                    <div id="loginA">
                        <h1 class="A7" align="center">Login Fans</h1>
                        <div id="loginboxA" class="box">
                            <i id="iconA" class="fa fa-power-off"></i>
                            <form method="POST" action="/login">
                                @csrf
                                <div id="form-container">
                                    <input class="text" id="logintextA" type="text" placeholder="Username" name="username" size="27"><i id="logintextA" class="clear icon fa fa-times"></i>
                                    <br>
                                    <br>
                                    <input class="text" id="loginpassA" type="password" placeholder="Password" size="27" name="password"><i id="loginpassA" class="clear icon fa fa-times"></i>
                                    <br>
                                    <br>
                                    <button type="submit" class="btn draw-border">Fans!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        setTimeout(function() {
            $("#main").removeClass("is-loading");
        }, 100)
    });



    $("#loginbox").mouseenter(function() {
        $("#loginbox").addClass("showbox");
    });

    $("#loginbox").mouseleave(function() {

        if (!$("#logintext,#loginpass").is(":focus")) {
            $("#loginbox").removeClass("showbox showpass");
        }

    });

    $("#logintext,#loginpass").focusout(function() {
        $("#loginbox").removeClass("showbox showpass");
    });

    $("#logintext, #loginpass").focusin(function() {
        $("#loginbox").addClass("showbox showpass");
    });





    $("#loginboxA").mouseenter(function() {
        $("#loginboxA").addClass("showbox");
    });

    $("#loginbox").mouseleave(function() {

        if (!$("#logintextA,#loginpassA").is(":focus")) {
            $("#loginboxA").removeClass("showbox showpass");
        }

    });

    $("#logintextA,#loginpassA").focusout(function() {
        $("#loginboxA").removeClass("showbox showpass");
    });

    $("#logintextA, #loginpassA").focusin(function() {
        $("#loginboxA").addClass("showbox showpass");
    });
</script>

</body>

</html>
