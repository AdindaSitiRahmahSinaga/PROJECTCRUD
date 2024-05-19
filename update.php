<?php
//Disini akan digunakan kode PHP untuk memproses data
//Ambil koneksi ke basisdata, karena data ini akan disimpan didalam basisdata.
require_once "KoneksiDB.php";
//cek form yang di kirim
if($_SERVER['REQUEST_METHOD']=="POST"){
//ambil data dari form, simpan dalam variabel
$nim=$_POST['nim']; //yg didalam tanda kutip harus sama dengan name di form
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jkl=$_POST['jkl'];
$agama=$_POST['agama'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$created_at="current_timestamp()";
$update_at="current_timestamp()";

//buat SQL untuk simpan data
$sqlupdate="INSERT INTO mahasiswa
VALUES('$nim','$nama','$alamat','$jkl','$agama','$email','$pwd',$created_at,$update_at)";
//Proses ke mysql server, menggunakan mysqli_query()
if(mysqli_query($koneksi,$sqlupdate)){
//redirect ke halaman tampildata.php jika proses simpan berhasil
echo "<script> alert('Data sudah diupdate');
window.location.assign('TampilData.php'); </script>";
}
}
//Sampai disini program sudah siap, kita coba jalankan.
//Ok. program untuk tambah data (save) sudah selesai.
//ketika input jgn menggunakan nim yg sama karena nim adalah primary key,
