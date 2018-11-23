@extends('layouts.app')

@section('content')
<div>
	<p>Tambah Homestay</p>
</div>
<form action="{{route('homestay.store')}}" method="post">
	{{ csrf_field() }}
  <div class="container">
  	<div class="form-group">
	    <h1>Register</h1>
	    <p style="font-size: 50px" >Please fill in this form to create an homestay.</p>
	    <hr>

	    <label for="email"><b style="font-size: 20px" >Nama Homestay</b></label><br>
	    <input type="text" class="form-control" style="width: 500px  height: 500px"  placeholder="Enter homestay's name" name="nama" required><br>

	    <label for="psw"><b style="font-size: 20px">Lokasi</b></label><br>
	    <input type="text" class="form-control" placeholder="Enter location" name="lokasi" required><br>

	    <label for="psw"><b style="font-size: 20px">Gambar</b></label><br>
	    <input type="file" class="form-control" placeholder="Enter location" name="lokasi" required><br>

	  
	    <p style="font-size: 10px">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
	    <button style="font-size: 25px" type="submit" class="btn btn-primary">Register</button>
	</div>
  </div>

</form>

@endsection