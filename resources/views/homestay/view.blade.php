@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
            <div class="">
                @foreach($homestays as $homestay)
               
                    <div class="">
                        <br>
                    {{ $homestay->nama}}
                    </div>
                    <div class="card">
                       <textarea  class="form-control">
                        {{$homestay->lokasi}}
                        </textarea>
                        
                    </div>
                    <a  href="{{route('homestay.edit',$homestay->id)}}" class="btn btn-primary"><button class="btn btn-primary">Updates</button></a>
                    <form method="post" action="{{route('homestay.destroy',$homestay)}}">
                         {{csrf_field()}}
                        {{ method_field('DELETE') }}
                        <input type="submit" class="btn btn-danger"  value="delete">

                        
                    </form>

                    

                    <!-- <a href=""><button class="btn btn-danger">delete</button></a> -->
                 @endforeach
               
                
            </div>
       </div>
</div>
<div>

</div>
@endsection