<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/main2.css" />
    <title>Artist Registration Page</title>
  </head>

  <body>
{{-- Title of artist page sign up --}}
      <div class="titlePage">
          <h1>Fan Registration Page</h1>
            <p>
                <img class="filtered" src="Images/FanConcertBackground.gif" class="eminem"/>
            </p>
      </div>
{{-- Sign up Info card         --}}
      <div class="card" style="width: 84rem;">
          <div class="card-body">
              <h2 class="card-title">Fan Info</h2>
                <form method="POST" action="{{ route('register') }}">

                    <input class="form control text-danger text-center" type="text" name="last_name" value="" maxlength="100" placeholder="Create Your Fan Username" /></br>
                    </br>
                    <input class="form control text-danger text-center" type="text" name="last_name" value="" maxlength="100" placeholder="First Name"/></br>
                    </br>
                    <input class="form control text-danger text-center" type="text" name="last_name" value="" maxlength="100" placeholder="Last Name"/></br>
                    </br>
                    <input class="form control text-danger text-center" type="text" name="last_name" value="" maxlength="100" placeholder="City"/></br>
                    </br>
                    <input class="form control text-danger text-center" type="text" name="last_name" value="" maxlength="100" placeholder="State"/></br>
                    </br>
                    <input class="form control text-danger text-center" type="text" name="last_name" value="" maxlength="100" placeholder="Zipcode"/></br>
                    </br>
                    <input class="form control text-danger text-center" type="text" name="last_name" value="" maxlength="100" placeholder="Create your password"/></br>
                    </br>
                    <input class="form control text-danger text-center" type="text" name="last_name" value="" maxlength="100" placeholder="Confirm your password"/></br>

                </br><a href="#" class="btn btn-primary">Submit</a>
                </form>
         </div>
     </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
