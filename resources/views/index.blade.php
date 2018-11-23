<!DOCTYPE html>
<html lang="en">
<head>
  <title>I-Stay</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap/bootstrap.min.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
<div style="background-color:#6CBAEC">
    <br>
</div>
    <div class="" id="">
        <a style="margin-bottom:50"><img width="150"  style="margin-left:1000"src="img/portfolio/fullsize/1.PNG"></a>
    </div>
<nav class=" navbar-inverse" style="background-color:white">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src=""></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
<!--        <a style="margin-bottom:50"><img width="150"  style="margin-left:1000"src="img/portfolio/fullsize/1.PNG"></a>-->
<!--
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
-->
        
      <ul class="nav navbar-nav navbar-right">
        <select class="navbar-right">
            <option><a href="#">Bahasa Indonesia</a></option>
            <option><a href="#">ahasa Inggris</a></option>
        </select>
    <div class="">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('mobil.create')}}">Buat Mobil baru</a></li>
        <li><a href="{{ URL::to('test/test.blade.php')}}">Penginapan</a></li>
          <li class=""><a href="#">Pengalaman</a></li>
        <li><a href="#">Objek Wisata</a></li>
        <li><a href="{{route('login')}}">Login</a></li></ul>
    </div>
    </ul>
  </div>
</div>
</nav>
<div style="background-color:#D9D4D4" class="container-fluid">
<br>    
</div>

<div class="jumbotron" style="background-color:#EFB417"><font face="Comic sans MS" size="25px">
    <p style="font-size:15px" >Cari Homestay anda dengan Mudah di sini</p></font>
  <div class="wrapper jumbotron container text-center wrapper">
    <h1>Jabukku</h1>      
    <p>Test</p>
  </div>
</div>
<div class="container" style="background-color:#D9D4D4">
    <div >
        <p>Temukan Homestaymu</p>
    </div>
</div>
<div class="container jumbotron"style="background-color:#ffffff">

        <p style="font-size:15"  >Lokasi :</p>  
    <div class="col-sm-6">
        <input type="text" style="width:300px" placeholder="Balige,Sumatera Utara">
    </div>
    <p>test</p>
    <div class="jumbotron col-sm-6"style="background-color:#ffffff" >
    </div>
</div>
<div class="container-fluid bg-3 text-center">    
  <h3>Some of my Work</h3><br>
  <div class="row">
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p class="font style:Ravie">testt</p>
        
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br>

<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
  <main>
    @yield('contents')
  </main>
</div><br><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
