@if(session('succes'))
	<div class="alert alert-succes">
		{{session('succes')}}
	</div>	
@endif
@if(session('info'))
	<div class="alert alert-info">
		{{session('info')}}
	</div>	
@endif
@if(session('danger'))
	<div class="alert alert-danger">
		{{session('danger')}}
	</div>	
@endif