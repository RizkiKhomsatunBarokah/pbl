<?php
include('koneksi.php');
$db = new database();
$data_users = $db->tampil_data();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Menambahkan Data Mahasiswa</h3>
<hr/>
<form method="post" action="proses_edit_mahasiswa.php?action=add" enctype="multipart/form-data">
<table>
	<tr>
        <td>ID User</td>
        <td>:</td>
        <td><select name="id_user" id="">
            <option value="">Pilih User</option>
            <?php
            foreach ($data_users as $data_user){
                echo '<option value="' . $data_user['id_user']. '">' . $data_user['username'] . '</option>';
            }
            ?>
        </select>
        </td>
	</tr>
	<tr>
		<td>NIM</td>
		<td>:</td>
		<td><input type="number" name="nim"/></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td><input type="text" name="kelas_mhs"/></td>
	</tr>
    <tr>
		<td>Prodi</td>
		<td>:</td>
		<td><input type="text" name="prodi_mhs"/></td>
	</tr>
    <tr>
        <td>TTD MAHASISWA</td>
		<td>:</td>
		<td><input type="file" name="ttd_mhs"/></td>
    </tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Simpan"/></td>
	</tr>
</table>
</form>
</body>
</html>