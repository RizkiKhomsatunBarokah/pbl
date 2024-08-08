<?php 	
include('koneksi.php');
$db = new database();
$id_mhs = $_GET['id'];
$data_users = $db->tampil_data();
if(! is_null($id_mhs))
{
	$data_mhs = $db->get_by_mhs($id_mhs);
}
else
{
	header('location:tampil_mahasiswa.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Update Data Mahasiswa</h3>
<hr/>
<form method="post" action="proses_edit_mahasiswa.php?action=update" enctype="multipart/form-data">
<input type="hidden" name="id_mhs" value="<?php echo $data_mhs['id_mhs']; ?>"/>
<table>
    <tr>
        <td>ID User</td>
        <td>:</td>
        <td><select name="id_user" id="">
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
		<td><input type="number" name="nim" value="<?php echo $data_mhs['nim']; ?>"/></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td><input type="text" name="kelas_mhs" value="<?php echo $data_mhs['kelas_mhs']; ?>"/></td>
	</tr>
	<tr>
		<td>Prodi</td>
		<td>:</td>
		<td><input type="text" name="prodi_mhs" value="<?php echo $data_mhs['prodi_mhs']; ?>"/></td>
	</tr>
    <tr>
        <td>TTD MAHASISWA</td>
		<td>:</td>
		<td><input type="file" name="ttd_mhs"/></td>
        <td><img src="data:image/png;base64,<?php echo base64_encode($data_mhs['ttd_mhs']); ?>" width="100px"></td>
    </tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Update"/></td>
	</tr>
</table>
</form>
</body>
</html>