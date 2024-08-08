<?php 	
include('koneksi.php');
$db = new database();
$data_user = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p><center><b>USER</b></center></p>
<table border="1">
		<tr>
			<th>No</th>
			<th>Kode Role</th>
			<th>Username</th>
			<th>Email</th>
			<th>Password</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data_user as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['kode_role']; ?></td>
				<td><?php echo $row['username']; ?></td>
				<td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
				<td>
					<a href="edit_user.php?id=<?php echo $row['id_user']; ?>">Edit</a>
					<a href="proses_edit_user.php?action=delete&id=<?php echo $row['id_user']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	<br>
	<a href="tambah_user.php">Tambah Data</a>
</body>
</html>

<!-- wjkdbjedgbwekjgcwk -->