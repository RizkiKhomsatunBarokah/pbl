<?php
include('koneksi.php');
$db = new database();
$data_mhss = $db->tampil_mhs();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Menambahkan Data Surat</h3>
<hr/>
<form method="post" action="proses_edit_surat.php?action=add">
<table>
	<tr>
        <td>ID Mahasiswa</td>
        <td>:</td>
        <td><select name="id_mhs" id="">
            <option value="">Mahasiswa</option>
            <?php
            foreach ($data_mhss as $data_mhs){
                echo '<option value="' . $data_mhs['id_mhs']. '">' . $data_mhs['nim'] . '</option>';
            }
            ?>
        </select>
        </td>
	</tr>
	<tr>
		<td>ID Pelapor</td>
		<td>:</td>
		<td><input type="number" name="id_pelapor"/></td>
	</tr>
	<tr>
		<td>ID Bagian Perpustakaan</td>
		<td>:</td>
		<td><input type="number" name="id_bag_perpustakaan"/></td>
	</tr>
    <tr>
		<td>ID Bagian Keuangan</td>
		<td>:</td>
		<td><input type="number" name="id_bag_keuangan"/></td>
	</tr>
    <tr>
		<td>ID Dosen</td>
		<td>:</td>
		<td><input type="number" name="id_dosen"/></td>
	</tr>
    <tr>
		<td>ID Kajur</td>
		<td>:</td>
		<td><input type="number" name="id_kajur"/></td>
	</tr>
    <tr>
		<td>Nama Surat</td>
		<td>:</td>
		<td><input type="text" name="nama_surat"/></td>
	</tr>
    <tr>
		<td>Tanggal Surat</td>
		<td>:</td>
		<td><input type="date" name="tgl_surat"/></td>
	</tr>
    <tr>
		<td>Nomor Surat</td>
		<td>:</td>
		<td><input type="number" name="no_surat"/></td>
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