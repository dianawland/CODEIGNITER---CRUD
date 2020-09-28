<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index(){
		$data = $this->mymodel->GetMahasiswa();
	    $this->load->view('tabel-1',array('data' =>$data));
		}


	public function insert()
	{
		$res=$this->mymodel->InsertData('mahasiswa',array(
			"id" => "7",
			"Nama" => "iin",
			"TTL" => "Perbaungan, 10 Oktober 2005",
			"Prodi" => "Teknik Informatika",));

			if($res >=1){
				echo "<h2>Insert Data Sukses</h2>";
			}else {
				echo "<h2>Coba Lagi!</h2>";
			}
	}


	public function Update()
	{
		$res=$this->mymodel->UpdateData('mahasiswa',array(
			"Nama" => "iin , kim seokjin",
			),array('id' =>"7"));

			if($res >=1){
				echo "<h2>Update Data Sukses</h2>";
			}else {
				echo "<h2>Coba Lagi!</h2>";
			}
	}

	public function Delete()
	{
		$res=$this->mymodel->DeleteData('mahasiswa',array('id' =>"7"));

			if($res >=1){
				echo "<h2>Delete Data Sukses</h2>";
			}else {
				echo "<h2>Coba Lagi!</h2>";
	}

}

public function panggil(){
	$data =$this->db->query("select* from mahasiswa")->result();
	echo"<pre>";
	print_r($data);
	echo"<pre>";
}

	
}
