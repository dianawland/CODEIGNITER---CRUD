<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	
	public function index(){
		$data = $this->mymodel->GetMahasiswa();
	    $this->load->view('tabel-1',array('data' =>$data));
	}

	public function add_data(){

		$this->load->view('form_add');

	}

	public function do_insert() {
		$id = $_POST['id'];
		$Nama = $_POST['Nama'];
		$TTL = $_POST['TTL'];
		$Prodi = $_POST['Prodi'];
		$data_insert = array( 
			'id' => $id,
			'Nama' => $Nama,
			'TTL' => $TTL,
			'Prodi' =>$Prodi);

			$res =$this->mymodel->insertData('mahasiswa',$data_insert);
			if ($res>=1)
			{
				redirect('crud/index');
			} else{
				echo "<h2>Insert data gagal</h2>";
			}
		}

		public function edit_data()
{
$mhs = $this->mymodel->GetMahasiswa();
 $data = array (
	 "id" => $mhs[0]['id'],
	 "Nama" => $mhs[0]['Nama'],
	 "TTL" => $mhs[0]['TTL'],
	 "Prodi" => $mhs[0]['Prodi'],
 );




	 $this->load->view('form_edit',$data);


}

public function do_update()
{
	$id = $_POST['id'];
		$Nama = $_POST['Nama'];
		$TTL = $_POST['TTL'];
		$Prodi = $_POST['Prodi'];
		$data_update = array( 
			'id' => $id,
			'Nama' => $Nama,
			'TTL' => $TTL,
			'Prodi' =>$Prodi,);

		
		$where = array('id' => $id);
			$res =$this->mymodel->UpdateData('mahasiswa',$data_update,$where);
			if ($res>=1)
			{
				redirect('crud/index');
			} else{
				echo "<h2>Insert data gagal</h2>";
			}
		}



			public function do_delete($id){
				$where = array ('id' => $id);
				$res =$this->mymodel->DeleteData('mahasiswa',$where);
				if($res>=1){
					redirect('crud/index');
				}
				
			}


	}

		


	