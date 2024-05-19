<?php
//mengambil program koneksidb, dengan menggunakan fungsi include
include "KoneksiDB.php";
//Membuat SQL untuk menampilkan data
$sqltampil = "SELECT * FROM mahasiswa";
//Melakukan proses query ke basisdata
$query = mysqli_query($koneksi, $sqltampil) or die("SQL Error");
$nomor = 1;//untuk membuat nomor untuk di tabel hasil query
?>
<h2>Data Perpustakaan 4C</h2>
<!-- Disini kita buat link untuk menambahkan data, dimana link ini nantinya akan memanggil form tambah data. -->
<a href="form.php">Tambah Data !</a>
<table width="100%" border="1">
<thead>
<tr>
<th>Nim</th> <th>Nama</th> <th>Alamat</th> <th>Jenis kelamin</th> <th>Agama</th> <th>Email</th> 
<th>Password</th> <th>Created_at</th> <th>Update_at</th>
</tr>
</thead>
<tbody>
<?php
//Jika data lebih dari 1, maka kita bisa menampilkan dengan menggunakan perintah perulangan seperti (for,while, do-while,foreach)
//mysqli_fetch_assoc merupakan fungsi yang digunakan untuk mengkonversi data menjadi data array asosiatif.
while ($data = mysqli_fetch_assoc($query)) {
?>
<tr>
<!-- untuk menampilkan data, kita gunakan tag pandek php yaitu spt dibawah -->
<td><?= $data['nim'] ?></td>
<td><?= $data['nama'] ?></td>
<td><?= $data['alamat'] ?></td>
<td><?= $data['jkl'] ?></td>
<td><?= $data['agama'] ?></td>
<td><?= $data['email'] ?></td>
<td><?= $data['pwd'] ?></td>
<td><?=$data['created_at']?></td>
<td><?=$data['updated_at']?></td>
<td>
<a href="edit.php?nim=<?=$data['nim']?>"> Edit</a> | <a
href="delete.php?nim=<?=$data['nim']?>">Delete</a>
</td>
</tr>
<?php $nomor++;
} //akhir dari perulangan ?>
</tbody>
</table