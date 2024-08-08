<?php 	
include('koneksi.php');
$db = new database();
$id_user = $_GET['id'];
if(! is_null($id_user))
{
	$data_user = $db->get_by_id($id_user);
}
else
{
	header('location:tampil_user.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Update Data User</h3>
<hr/>
<form method="post" action="proses_edit_user.php?action=update">
<input type="hidden" name="id_user" value="<?php echo $data_user['id_user']; ?>"/>
<table>
	<tr>
		<td>Kode Role</td>
		<td>:</td>
		<td><input type="text" name="kode_role" value="<?php echo $data_user['kode_role']; ?>"/></td>
	</tr>
	<tr>
		<td>Username</td>
		<td>:</td>
		<td><input type="text" name="username" value="<?php echo $data_user['username']; ?>"/></td>
	</tr>
	<tr>
		<td>Email</td>
		<td>:</td>
		<td><input type="text" name="email" value="<?php echo $data_user['email']; ?>"/></td>
	</tr>
    <tr>
		<td>Password</td>
		<td>:</td>
		<td><input type="text" name="password" value="<?php echo $data_user['password']; ?>"/></td>
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