<br>
<a href="form.php">Tambah Data !</a>
<Br></Br>
<?php
include_once "DB.php";
$sql="SELECT * FROM mahasiswa";
$q=mysqli_query($koneksi,$sql);
?>
<table width="100%" border="1">
<thead>
<tr>
<th>Nim</th> <th>Nama</th> <th>Alamat</th> <th>Jenis kelamin</th> <th>Agama</th> <th>Email</th> 
<th>Password</th> <th>Created_at</th> <th>Update_at</th>
</tr>
</thead>
<tbody>
<?php
$no=1;
while($data=mysqli_fetch_assoc($q)) {
?>
<tr>

<td><?=$data['nim']?></td>
<td><?=$data['nama']?></td>
<td><?=$data['alamat']?></td>
<td><?=$data['jkl']?></td>
<td><?=$data['agama']?></td>
<td><?=$data['email']?></td>
<td><?=$data['pwd']?></td>
<td><?=$data['created_at']?></td>
<td><?=$data['updated_at']?></td>
<td>
<a href="edit.php?nim=<?=$data['nim']?>">Edit</a> |
<a href="delete.php?nim=<?=$data['nim']?>">Delete</a>
</td>
</tr>
<?php $no++; } ?>
</tbody>
</table>