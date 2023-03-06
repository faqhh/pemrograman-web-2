<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h2 style="text-align: center;">From Nilai Mahasiswa</h2>
    <hr>
    <div class="container">
    <!-- taro buka from disini -->
    <form method="POST" action="nilai_siswa.php">
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Nama Mahasiswa</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="name" name="name" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar-Dasar pemrograman</option>
        <option value="WEB">Pemrograman Web</option>
        <option value="BASDAT">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Masukan Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="Masukan Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukan Nilai Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" value="simpan">
    </div>
  </div>
</form>
<!-- taro tutup form disini -->
<?php
// $proses = $_GET['proses'];
// $nama_siswa = $_GET['name'];
// $mata_Kuliah =$_GET['matkul'];
// $uts = $_GET['nilai_uts'];
// $uas = $_GET['nilai_uas'];
// $tugas=$_GET['nilai_tugas'];

// echo "Nama : $nama_siswa";
// echo"<br/>Mata Kuliah : $mata_Kuliah";
// echo"<br/>Nilai UTS : $uts";
// echo"<br/>NIlai UAS : $uas";
// echo"<br/>Nilai Tugas Praktikum : $tugas";
// echo"<br/>Data telah di : $proses";
?>
    </div>
</body>
</html>