<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Rap-it-Up</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile/{{ Auth::id() }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Log-Out</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="figure container-fluid">
        <div class="row B2 justify-content-center">
            <div class="movehigher col-6 search-form text-center">
                    <form method="GET" action="/home">
                    @csrf
                    <h2 id="litt" class="heading">Search Artist</h2>
                    <div class="control-group">
                        <input name="rap" class="form-control mr-sm-2 mb-2" type="search" placeholder="Search" aria-label="Search">
                        <button type="submit" class="btn btn-dark">Lets go!</button>
                    </div>
                </form>
            </div>
        </div>
        <?php dump($results); ?>
        <div class="row B1 justify-content-center">
            <h1 id="lit">Featured Artists This Week!</h1>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="container">
                    <div class="profile">
                        <div class="profile__avatarA"></div>
                        <div class="profile__description">
                            <span class="profile__description__name">Zombie Juice</span>
                            <span class="profile__description__info">1/3 of Flatbush Zombies</span>
                            <a href="/connect/3"><button type="button" class="btn btn-dark">Connect</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="container">
                    <div class="profile">
                        <div class="profile__avatarB"></div>
                        <div class="profile__description">
                            <span class="profile__description__name">Kendrick Lamar</span>
                            <span class="profile__description__info">Top-Dawg-Entertainment</span>
                            <a href="/connect/4"><button type="button" class="btn btn-dark">Connect</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="container">
                    <div class="profile">
                        <div class="profile__avatarC"></div>
                        <div class="profile__description">
                            <span class="profile__description__name">MF Doom</span>
                            <span class="profile__description__info">Rap's SuperVillian</span>
                            <a href="/connect/5"><button type="button" class="btn btn-dark">Connect</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (count($results) > 0)
            @foreach($results as $artist)
                <h2 class="content-title">{{$artist->username}} </h2>
                <p class="content-title">{{$artist->city}}, {{$artist->state}}</p>
                <button type="button" class="btn btn-secondary" href="">connect</button>
                <div id="wow"></div>
            @endforeach
        @endif
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
