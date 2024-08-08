<?php 
include('koneksi.php');
$koneksi = new database();
 
$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_user($_POST['kode_role'],$_POST['username'],$_POST['email'],$_POST['password']);
}
elseif($action=="update")
{
	$koneksi->update_user($_POST['kode_role'],$_POST['username'],$_POST['email'],$_POST['password'],$_POST['id_user']);
}
elseif($action=="delete")
{
	$id_user = $_GET['id'];
	$koneksi->delete_user($id_user);
}
header('location:tampil_user.php');
?>