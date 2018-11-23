@extends('layouts.app')
@section('content')

<div class="panel panel-info">
    <div class="panel-heading">
        <center>
            <h1> CRUD LARAVEL</h1>
        </center>
        
    </div>
    <div class="panel-body">
        <a href="{{URL('kendaraan/create)}}" class="btn btn-raised btn-primary pull-right"> Tambah </a>
        {{-- part alert ---}}
        @if(Session::has('after_update))
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-dismissible alert-{{Session::get('after_update.alert')}}">
                    <button type="button" class="close" data-dismiss="alert"> X</button>
                    <strong>{{Session::get('after_update.titlle')}}</strong>
                    <a href="javascript:void(0)" class="alert-link">{{Session::get('after_update.text-1')}}</a>{{Session::get('after_update.text-2')}}
                </div>
            </div>
        </div>
        @endif
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Kendaraan</th>
                    <th>Jenis Kendaraan</th>
                    <th>Buatan</th>
                    <th>Pemilik</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php(
                    $no=1
                )
                @foreach($kendaraans as $kendaraan)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$kendaraan->nama_kendaraan}}</td>
                    <td>{{$kendaraan->jenis_kendaraan}}</td>
                    <td>{{$kendaraan->buatan}}</td>
                    <td>{{$kendaraan->user->name}}</td>
                    <td>
                        <center>
                            <a href="{{URL('kendaraan//show')}}/{{$kendaraan->id}}" class="btn btn-sm btn-raised btn-info"> Edit</a>
                            <a href="{{URL('kendaraan//destroy')}}/{{$kendaraan->id}}" class="btn btn-sm btn-raised btn-danger"> hapus</a>
                        </center>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop