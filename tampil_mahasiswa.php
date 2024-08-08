<?php 	
include('koneksi.php');
$db = new database();
$data_mhs = $db->tampil_mhs();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p><center><b>DATA MAHASISWA</b></center></p>
<table border="1">
		<tr>
			<th>No</th>
			<th>ID Mahasiswa</th>
            <th>ID User</th>
			<th>Nim</th>
			<th>Kelas</th>
			<th>Prodi</th>
			<th>ttd</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data_mhs as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['id_mhs']; ?></td>
                <td><?php echo $row['id_user']; ?></td>
				<td><?php echo $row['nim']; ?></td>
				<td><?php echo $row['kelas_mhs']; ?></td>
				<td><?php echo $row['prodi_mhs']; ?></td>
                <td><img src="data:image/png;base64,<?php echo base64_encode($row['ttd_mhs']); ?>" width="100px"></td>
				<td>
					<a href="edit_mahasiswa.php?id=<?php echo $row['id_mhs']; ?>">Edit</a>
					<a href="proses_edit_mahasiswa.php?action=delete&id=<?php echo $row['id_mhs']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	<br>
	<a href="tambah_mahasiswa.php">Tambah Data</a>
</body>
</html>