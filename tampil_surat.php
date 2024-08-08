<?php 	
include('koneksi.php');
$db = new database();
$data_surat = $db->tampil_surat();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p><center><b>DATA SURAT</b></center></p>
<table border="1">
		<tr>
			<th>No</th>
			<th>ID Mahasiswa</th>
            <th>ID Pelapor</th>
			<th>ID Bagian Perpustakaan</th>
			<th>ID Bagian Keuangan</th>
			<th>ID Dosen</th>
			<th>ID Kajur</th>
            <th>Nama Surat</th>
            <th>Tanggal Surat</th>
            <th>Nomor Surat</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data_surat as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['id_mhs']; ?></td>
                <td><?php echo $row['id_pelapor']; ?></td>
				<td><?php echo $row['id_bag_perpustakaan']; ?></td>
				<td><?php echo $row['id_bag_keuangan']; ?></td>
				<td><?php echo $row['id_dosen']; ?></td>
                <td><?php echo $row['id_kajur']; ?></td>
                <td><?php echo $row['nama_surat']; ?></td>
                <td><?php echo $row['tgl_surat']; ?></td>
                <td><?php echo $row['no_surat']; ?></td>
				<td>
					<a href="edit_surat.php?id=<?php echo $row['id_surat']; ?>">Edit</a>
					<a href="proses_edit_surat.php?action=delete&id=<?php echo $row['id_surat']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	<br>
	<a href="tambah_surat.php">Tambah Data</a>
</body>
</html>