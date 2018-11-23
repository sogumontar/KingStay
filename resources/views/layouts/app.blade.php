<!doctype html>
<html lang="en">
  <head>
    <title>KingStay</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/carousel.css') }}">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <style>
      /* Remove the navbar's default margin-bottom and rounded borders */
      .navbar {
        margin-bottom: 0;
        border-radius: 0;
      }

      /* Add a gray background color and some padding to the footer */
      footer {
        background-color: #f2f2f2;
        padding: 25px;
      }
    </style>
  </head>
  <body>

    <header>

      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg" style="background-color:#6CBAEC;">
        <a class="navbar-brand" href="#">
          <img src="" width="30" height="30" class="d-inline-block align-top" alt="">

        </a>
      </nav>

            <div class="jumbotron text-right" style="margin-bottom:0;background-color:white;">
              <nav class="navbar navbar-expand-lg navbar-lg"style="background-color:white;">
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03" style="background-color:white;">
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    
                  </ul>
                  <div class="form-inline">
                    <ul class="navbar-nav ">
                    <li class="nav-item active">
                      <a class="nav-link" href="#" style="color:black;">Home</a>
                    </li>
                    <br>
              <!-- Button trigger modal -->

                  <!-- Modal -->

                  <li class="nav-item" >
                    <a class="nav-link " href="#" style="color:black;">Disabled</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
          <nav class="navbar navbar-expand-sm" style="background-color:#F5F5F5;">
            <a class="navbar-brand" href="#" style="color:#F5F5F5;">jabukku</a>


            </div>
          </nav>

        </header>

        <main role="main">

          <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Hello, world!</h1>
          <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
      </div>



      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container" style="margin-top:30px;" >
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
            <div class="card-header">Temukan Homestay mu</div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Lokasi : </h5>
                      <div class="input-group-prepend">
                          <div class="input-group-text">@</div>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Lokasi"></div>
                          <h5>Check in : </h5>
                          <div class="row">
                            <div class="col">
                              <input type="date" class="form-control" placeholder="First name">
                            </div>
                            <div class="col">
                              <input type="time" class="form-control" placeholder="Last name">
                            </div>
                          </div>
                          <h5>Check in : </h5>
                          <div class="row">
                            <div class="col">
                              <input type="date" class="form-control" placeholder="First name">
                            </div>
                            <div class="col">
                              <input type="time" class="form-control" placeholder="Last name">
                            </div>
                          </div>


                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleFormControlSelect2">Tamu</label>
                        <select class="form-control" id="exampleFormControlSelect2">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect2">Kamar</label>
                        <select class="form-control" id="exampleFormControlSelect2">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                       <a href="#" class="btn btn-primary">Cari</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            </div>
        </div>
      </div>
      </div>


    <div class="container">
      <hr>
      <h5 style="text-align:center;">Homestay Favorit</h5>
      <hr>
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <div class="card-body">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <img class="card-img-top" src="3.jpg" alt="Card image cap">
                  <hr>
                  <p>Pemendangan di homestay ini sangat keren</p>
                </div>
                  <h5 class="card-header"> <a href="#" class="btn btn-primary">Detail</a></h5>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-body">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <img class="card-img-top" src="3.jpg" alt="Card image cap">
                  <hr>
                  <p>Pemendangan di homestay ini sangat keren</p>
                </div>
                  <h5 class="card-header"> <a href="#" class="btn btn-primary">Detail</a></h5>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-body">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <img class="card-img-top" src="3.jpg" alt="Card image cap">
                  <hr>
                  <p>Pemendangan di homestay ini sangat keren</p>
                </div>
                  <h5 class="card-header"> <a href="#" class="btn btn-primary">Detail</a></h5>
              </div>
            </div>
          </div>
        </div>

        <hr>

      </div>

      <div class="jumbotron text-center" style="background-color:grey;">
        <p>Footer</p>
      </div>
    </main>
  </body>
</html>
