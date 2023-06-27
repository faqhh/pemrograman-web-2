@extends('admin.layout.app')
@section('content')
<form method="POST" action="{{ url('admin/pesanan/store') }}">
    {{ csrf_field()}}
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label>
    <div class="col-8">
      <input id="kode" name="kode" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Pemesan</label>
    <div class="col-8">
      <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat_pemesan" class="col-4 col-form-label">Alamat Pemesan</label>
    <div class="col-8">
      <input id="alamat_pemesan" name="alamat_pemesan" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="no_hp" class="col-4 col-form-label">No Hp</label>
    <div class="col-8">
      <input id="no_hp" name="no_hp" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label>
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label>
    <div class="col-8">
      <input id="jumlah_pesanan" name="jumlah_pesanan" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
    <div class="col-8">
      <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control" spellcheck="false" data-ms-editor="true"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="kategori_produk_id" class="col-4 col-form-label">Nama Produk</label>
    <div class="col-8">
      <select id="kategori_produk_id" name="kategori_produk_id" class="custom-select">
        @foreach ($produk as $prod)
            <option value="{{ $prod->id }}">{{ $prod->nama_produk }}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
@endsection