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
            </li>
           
        </div>
      </div>
    </nav>
    <!-- Navbar -->

    <!-- Jumbotron -->

    <!-- Jumbotron -->
  </header>
</head>

<body>

</body>

</html>
<header>
  <!-- Intro settings -->


  <!-- Navbar -->

  <!-- Navbar -->

  <!-- Jumbotron -->

  <!-- Jumbotron -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main class="my-5">
  <div class="container">
    <!--Section: Content-->
    <section class="product-list py-3">
      <div class="container py-5">
        <h1 class="section-title h1 text-center">Latest Posts</h1>
        <br>

        <div class="row mt-3" b-flex justify-content-center align-items-center>
          @foreach ($data as $data)
          <div class="col-lg-4 col-md-6">
            <div class="product-card">
              <div class="row">
                <figure class="row-6 product-card-img text-center">
                  <a href="#">
                    <img src={{ asset('/schools_image/'.$data->image) }} class="img-fluid" />

                  </a>
                </figure>
                <div class="row-6 product-card-desc">
                  <h5 class="card-title text-center">{{$data->name}}</h5>

                  <p class="card-text text-center">
                    {{$data->address}}
                  </p>

                  <div class="label text-center">
                    <a href={{"detail/".$data->id}} class="btn btn-primary">Read</a>

                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!--Section: Content-->

    <!-- Pagination -->
   
  </div>
</main>
<!--Main layout-->

<!--Footer-->


  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    ?? 2020 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!--Footer-->