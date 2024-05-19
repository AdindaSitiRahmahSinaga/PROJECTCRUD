<?php
//include koneksi
include "DB.php";
//buat sql
$sql="INSERT INTO mahasiswa 
(`nim`, `nama`, `alamat`, `jkl`, `agama`, `email`, `pwd`, `created_at`, `updated_at`) 
VALUES ('1234567', 'Adinda Siti Rahmah Sinaga', 'Mekar Tanjung', 'WANITA', 'Islam', 'adindasrs@gmail.com', 
'123456', '2024-04-22 10:13:17', '0000-00-00 00:00:00')";
//proses sql ke database
$q=mysqli_query($koneksi,$sql)or die('SQL Error');
if($q){
    echo "Data berhasil disimpan";
}else{
    echo "Gagal menyimpan data!";
}
?>