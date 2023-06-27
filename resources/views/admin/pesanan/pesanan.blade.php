@extends('admin.layout.app')
@section('content')
@if (Auth::user()->roal != 'pelanggan')
<div class="container-fluid px-4">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Pesanan</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                @if(Auth::user()->role == 'admin')
                <a href="{{ url('admin/pesanan/create') }}" class="btn btn-primary">Tambah Data</a>
            </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data pesanan
            </div>
            <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama Pemesan</th>
                        <th>Alamat Pemesan</th>
                        <th>No Handphone</th>
                        <th>E-mail</th>
                        <th>Jumlah Pesanan</th>
                        <th>Deskripi</th>
                        <th>Nama Produk</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                   @php
                       $no = 1;
                   @endphp
                   @foreach ($pesanan as $pesan)
                   <tr>
                    <td>{{$no}}</td>
                    <td>{{$pesan->tanggal }}</td>
                    <td>{{$pesan->nama_pemesan }}</td>
                    <td>{{$pesan->alamat_pemesan }}</td>
                    <td>{{$pesan->no_hp}}</td>
                    <td>{{$pesan->email}}</td>
                    <td>{{$pesan->jumlah_pesanan}}</td>
                    <td>{{$pesan->deskripsi}}</td>
                    <td>{{$pesan->nama_produk}}</td>
                    <td><a href="{{ url('admin/pesanan/edit/'. $pesan->id) }}" class="btn btn-success">Edit</a></td>
                    <td><a href="{{ url('admin/pesanan/delete/'. $pesan->id) }}" class="btn btn-danger">Delete</a></td>
                   </tr>
                   @php
                      $no++
                   @endphp
                   @endforeach
                </tbody>
            </table>
         </div>
      </div>
 </div>

</div>
@else
@include('admin.access_denied')
@endit

@endsection                    