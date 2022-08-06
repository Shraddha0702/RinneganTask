
<html>

<head>
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
              <a class="nav-link" aria-current="page" href={{route('display')}}>All Schools</a>
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
    <div class="container" style="margin-top:100px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('result'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('result')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                @endif
            <div class="card">
                <div class="card-header d-flex justify-content-between align-item-center">
                    <div>
                        <h2>Add Post</h2>
                    </div>
                </div>
               
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <form method="POST" action="/add" enctype="multipart/form-data">
                                    @csrf
                                  
                                    <div class="mb-3">
                                        <label for="Post Name" class="form-label">{{ __('School Name') }}</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Post Name" class="form-label">{{ __('Address') }}</label>
                                        <input type="text" name="address" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Post Name" class="form-label">{{ __('City') }}</label>
                                        <input type="text" name="city" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Post Data" class="form-label">{{ __('State') }}</label>
                                        <input type="text" name="state" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Post Data" class="form-label">{{ __('Contact Number') }}</label>
                                        <input type="text" name="contact" class="form-control">
                                    </div>
                                   
                                    <div class="mb-3">
                                        <label for="Post Image" class="form-label">{{ __('Image') }}</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label for="Post Data" class="form-label">{{ __('E-Mail ID') }}</label>
                                        <input type="text" name="email" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary px-4">Add</button>
                                </form>
                            </div>
                        </div>

                       
                        <br><br>
               
                        

</html>
