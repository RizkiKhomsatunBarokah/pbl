<?php 
class database{
 
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "pbl";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}
 
	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from user");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function tambah_user($kode_role,$username,$email,$password)
	{
		mysqli_query($this->koneksi,"insert into user (kode_role,username,email,password) values ('$kode_role','$username','$email','$password')");
	}

	function get_by_id($id_user)
	{
		$query = mysqli_query($this->koneksi,"select * from user where id_user='$id_user'");
		return $query->fetch_array();
	}

	function update_user($kode_role,$username,$email,$password,$id_user)
	{
		$query = mysqli_query($this->koneksi,"update user set kode_role='$kode_role',username='$username',email='$email',password='$password' where id_user='$id_user'");
	}

	function delete_user($id_user)
	{
		$query = mysqli_query($this->koneksi,"delete from user where id_user='$id_user'");
	}

	function tampil_mhs()
	{
		$data = mysqli_query($this->koneksi,"select * from tbl_mahasiswa");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function tambah_mahasiswa($id_user,$nim,$kelas_mhs,$prodi_mhs,$ttd_mhs_blob)
	{
		mysqli_query($this->koneksi,"insert into tbl_mahasiswa (id_user,nim,kelas_mhs,prodi_mhs,ttd_mhs) values ('$id_user','$nim','$kelas_mhs','$prodi_mhs','$ttd_mhs_blob')");
	}

	function get_by_mhs($id_mhs)
	{
		$query = mysqli_query($this->koneksi,"select * from tbl_mahasiswa where id_mhs='$id_mhs'");
		return $query->fetch_array();
	}

	function update_mahasiswa($id_user,$nim,$kelas_mhs,$prodi_mhs,$ttd_mhs, $id_mhs)
	{
		$ttd_mhs = mysqli_real_escape_string($this->koneksi, $ttd_mhs);
		$query = mysqli_query($this->koneksi,"update tbl_mahasiswa set id_user='$id_user',kelas_mhs='$kelas_mhs',prodi_mhs='$prodi_mhs',ttd_mhs='$ttd_mhs' where id_mhs='$id_mhs'");
	}

	function delete_mhs($id_mhs)
	{
		$query = mysqli_query($this->koneksi,"delete from tbl_mahasiswa where id_mhs='$id_mhs'");
	}

	function tampil_surat()
	{
		$data = mysqli_query($this->koneksi,"select * from tbl_surat");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function tambah_surat($id_mhs,$id_pelapor,$id_bag_perpustakaan,$id_bag_keuangan,$id_dosen,$id_kajur,$nama_surat,$tgl_surat,$no_surat)
	{
		mysqli_query($this->koneksi,"insert into tbl_surat (id_mhs,id_pelapor,id_bag_perpustakaan,id_bag_keuangan,id_dosen,id_kajur,nama_surat,tgl_surat,no_surat) values ('$id_mhs','$id_pelapor','$id_bag_perpustakaan','$id_bag_keuangan','$id_dosen','$id_kajur','$nama_surat','$tgl_surat','$no_surat')");
	}

	function get_by_surat($id_surat)
	{
		$query = mysqli_query($this->koneksi,"select * from tbl_surat where id_surat='$id_surat'");
		return $query->fetch_array();
	}

	function update_surat($id_mhs,$id_pelapor,$id_bag_perpustakaan,$id_bag_keuangan,$id_dosen, $id_kajur,$nama_surat,$tgl_surat,$no_surat,$id_surat)
	{
		$query = mysqli_query($this->koneksi,"update tbl_surat set id_mhs='$id_mhs',id_pelapor='$id_pelapor',id_bag_perpustakaan='$id_bag_perpustakaan',id_bag_keuangan='$id_bag_keuangan',id_dosen='$id_dosen',id_kajur='$id_kajur',nama_surat='$nama_surat',tgl_surat='$tgl_surat',no_surat='$no_surat' where id_surat='$id_surat'");
	}

	function delete_surat($id_surat)
	{
		$query = mysqli_query($this->koneksi,"delete from tbl_surat where id_surat='$id_surat'");
	}
}
?>