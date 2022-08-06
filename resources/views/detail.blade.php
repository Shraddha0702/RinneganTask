<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <header>
    <!-- Intro settings -->
    <style>
      #intro {
        /* Margin to fix overlapping fixed navbar */
        margin-top: 58px;
      }

      @media (max-width: 991px) {
        #intro {
          /* Margin to fix overlapping fixed navbar */
          margin-top: 45px;
        }
      }
    </style>
    <style>
      #intro {
        /* Margin to fix overlapping fixed navbar */
        margin-top: 58px;
      }

      @media (max-width: 991px) {
        #intro {
          /* Margin to fix overlapping fixed navbar */
          margin-top: 45px;
        }
      }
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand" target="_blank" href="https://mdbootstrap.com/docs/standard/">
          <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="16" alt="" loading="lazy" style="margin-top: -3px;" />
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="/add_post">Add new School</a>
           

        </div>
      </div>
    </nav>
    <!-- Navbar -->

    <!-- Jumbotron -->

    <!-- Jumbotron -->
  </header>
  </head>
<body>
    <br><br><br>
    <center>
<div class="card" style="width: 30rem; height: 43rem;">
@foreach($data as $data)

  <img src={{ asset('/schools_image/'.$data->image) }}  class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"> {{$data->name}}</h5>
    <br>
    <p class="card-text"><b>Address:</b> {{$data->address}}</p>
    <p class="card-text"><b>City:</b> {{$data->city}}</p>
    <p class="card-text"><b>State:</b> {{$data->state}}</p>
    <p class="card-text"><b>Contact Number:</b> {{$data->contact_number}}</p>
    <p class="card-text"><b>E-Mail ID:</b> {{$data->email_id}}</p>
    <a href="/display" class="btn btn-primary">back</a>
  </div>
  @endforeach
</div>
</center>
</body>
</html>