<?php
include 'koneksi.php';

// menyimpan data kedalam variabel
$id_mahasiswa   = $_POST['id_mahasiswa'];
$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$tgl_lahir      = $_POST['tgl_lahir'];
$tmpt_lahir     = $_POST['tmpt_lahir'];
$jurusan        = $_POST['jurusan'];
$thn_masuk      = $_POST['thn_masuk'];

// query untuk insert data mahasiswa
$query = "INSERT INTO data_mahasiswa SET  
        id_mahasiswa    ='$id_mahasiswa',
        nim             ='$nim',
        nama            ='$nama',
        tgl_lahir       ='$tgl_lahir',
        tmpt_lahir      ='$tmpt_lahir',
        jurusan         ='$jurusan',
        thn_masuk       ='$thn_masuk'
        ";
mysqli_query($koneksi, $query);

// echo " Input Data yang anda masukkan sukses berhasil";
// header("location:query.php");

echo "<script>alert('Data yang anda Input sukses');window.location='index.php'</script>";
