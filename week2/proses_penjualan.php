<?php
error_reporting(E_ALL ^ E_WARNING||E_NOTICE);
$nama = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

if($produk == "Tv"){
    $jumlah_harga = 4200000 * $jumlah;
} elseif($produk == "Kulkas"){
    $jumlah_harga = 5000000 * $jumlah;
} elseif($produk == "Mesin Cuci"){
    $jumlah_harga = 3800000 * $jumlah;
}else{

}
?>