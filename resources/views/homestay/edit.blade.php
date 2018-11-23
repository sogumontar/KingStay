@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-offset-2">
                <form action="{{ route('homestay.update',$homestays->id) }}"  method="post">
                    {{csrf_field()}}
                    {{ method_field('PATCH') }}
                    <div class="form-group">
                        <label>Nama Homestay</label>
                        <input type="text" class="form-control" name="nama" value="{{$homestays->nama}}">
                    </div>
                      <div class="form-group">
                        <label>Lokasi</label>
                        <input type="text" class="form-control" name="lokasi" value="{{$homestays->lokasi}}">
                    </div>
                   
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="save"> 
                    </div>
                </form>
                
            </div>
        </div>
    </div>
     @if($homestays->id==9)
     	<p>test</p>
     @else         <p>set</p>
           
                 @endif
@endsection