<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Menambahkan Data User</h3>
<hr/>
<form method="post" action="proses_edit_user.php?action=add">
<table>
	<tr>
		<td>Kode Role</td>
		<td>:</td>
		<td><input type="text" name="kode_role"/></td>
	</tr>
	<tr>
		<td>Username</td>
		<td>:</td>
		<td><input type="text" name="username"/></td>
	</tr>
	<tr>
		<td>Email</td>
		<td>:</td>
		<td><input type="text" name="email"/></td>
	</tr>
    <tr>
		<td>Password</td>
		<td>:</td>
		<td><input type="text" name="password"/></td>
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