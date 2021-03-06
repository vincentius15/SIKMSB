@extends('layouts.adminapp')

@section('content')
@include('admin.nav')
<div class="content-wrapper">
  <div class="container-fluid">

    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <div class="col-md-3 pull-left">
          <h3>Instruktur</h3>
        </div>
        <div class="col-md-3 pull-right">
          <a class="btn btn-primary float-right" href="/admin/instruktur/create">Data baru</a>
        </div>
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Nama Instruktur</th>
                <th>Jenis kelamin</th>
                <th>No SIM</th>
                <th>No KTP</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($instruktur as $i)
              <tr>
                <td class="align-middle">{{$i->nama}}</td>
                <td class="align-middle">{{$i->jenis_kelamin}}</td>
                <td class="align-middle">{{$i->no_sim}}</td>
                <td class="align-middle">{{$i->no_ktp}}</td>
                <td class="align-middle">{{$i->alamat}}</td>
                <td class="align-middle">{{$i->nomor_telepon}}</td>
                <td><a class="btn btn-primary btn-block" href="{{ url('/admin/instruktur/'.$i->id_instruktur.'/edit') }}">Edit</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
  </div>
@endsection
