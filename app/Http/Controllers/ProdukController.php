<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KategoriProduk;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = new Produk();
        return view('admin.produk.produk', ['produk' =>$produk->getAllData()]);
    }

    public function create()
    {
        //tampilkan seluruh data tabel katagori produk
        $kategori_produk = KategoriProduk::all();
        // tampilkan seluruh data tabel produk
        $produk = produk::all();
        return view('admin.produk.create',
        compact('kategori_produk','produk'));
    }

    public function store(Request $request)
    {
        //buat instance class baru dari model yang bernama produk
        // ambil data yang di inputkan user dengan mengunakan parameter request
        // lalu masukan kedalam kolam table produk
        // save data yang sudah di ambil mengunakan parameter request dengan method save()
        //kembalikan ke tampilan view produk setelah mengklik button simpan
        $produk = new Produk();
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();
        return redirect('admin/produk');

    }
    
    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $kategori_produk = DB::table('kategori_produk') ->get();
        $produk = DB::table('produk') ->where('id', $id) ->get();
        return view('admin.produk.edit', compact('produk','kategori_produk'));
    }

    public function update(Request $request)
    {
         //buat instance class baru dari model yang bernama produk
        // ambil data yang di inputkan user dengan mengunakan parameter request
        // lalu masukan kedalam kolam table produk
        // save data yang sudah di ambil mengunakan parameter request dengan method save()
        //kembalikan ke tampilan view produk setelah mengklik button simpan
        $produk = Produk::find($request->id);
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();
        return redirect('admin/produk');
    }

    public function destroy(string $id)
    {
        // buka tabel produk
        // cari data yang ingin di hapus berdsarkan id  nya
        // hapus data mengunakan mmetod delete()
        DB::table('produk')->where('id',$id)->delete();
        return redirect('admin/produk');
    }
}
