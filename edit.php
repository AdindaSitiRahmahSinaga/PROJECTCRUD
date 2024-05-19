<!-- Mengambil data yang akan diedit, berdasarkan nim yang dipilih dan dikirim melalui link (get) -->
<?php
$id=$_GET['nim'];
//membuat sql tampil data
$sqldata="SELECT * FROM mahasiswa WHERE nim='$id'";
//ambil koneksi data
require_once "koneksiDB.php";
//proses sql
$query=mysqli_query($koneksi,$sqldata);
//mengubah data ke array asosiatif, tidak menggunakan perulangan karena datanya hanya 1.
$data=mysqli_fetch_assoc($query);
//selanjutnya tampilkan pada field dibawah.
?>
<h2>Update Data Mahasiswa</h2>
<!-- tag form -->
<form action="update.php" method="POST">
Nim : <br>
<input type="text" name="nim" id="">
<br>
Nama : <br>
<input type="text" name="nama" id="">
<br>
Alamat : <br>
<input type="text" name="alamat" id="">
<br>
Jenis kelamin : <br>
<select name="jkl" id="">
<option value="Wanita">Wanita</option>
<option value="Pria">Pria</option>
</select>
<br>
Agama : <br>
<select name="agama" id="">
<option value="Islam">Islam</option>
<option value="Kristen">Kristen</option>
</select>
<br>
Email : <br>
<input type="text" name="email" id="">
<br>
Password : <br>
<input type="text" name="pwd" id="">
<br>
<button type="submit">Update Data</button>
</form>
