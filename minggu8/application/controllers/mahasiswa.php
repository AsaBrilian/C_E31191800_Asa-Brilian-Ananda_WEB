<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
// public function index(){
// $data['nama'] = "Ahmad Nur Fahri";
// $data['prodi'] = "MIF";
// $this->load->view('view_mahasiswa',$data);
// }
public function index(){
$data['Mahasiswa'] = [
["nama"=>"Kim Jefry","prodi"=>"MIF"],
["nama"=>"Ahmad Kurniawan","prodi"=>"TKK"],
["nama"=>"Budi Sudarsono","prodi"=>"TIF"] 
];
$this->load->view('view_mahasiswa',$data);
}
// public function index(){
// $data['Mahasiswa'] = $this->Mahasiswa_model->get_data();
// $this->load->view('view_mahasiswa',$data);
// }
public function prodi(){
	$data['Mahasiswa'] =[
		["prodi"=>"MIF", "keterangan"=>"Manajemen Informatika"],
		["prodi"=>"TKK", "keterangan"=>"Teknik Komputer Komputer"],
		["prodi"=>"TIF", "keterangan"=>"Teknik Informatika"]
	];
	$this->load->view('view_prodi',$data);
}
public function angkatan(){
	$data['Mahasiswa'] =[
		["tahun"=> 2017 ],
		["tahun"=> 2018 ],
		["tahun"=> 2019 ]
	];
	$this->load->view('view_angkatan',$data);
}
public function profil(){
echo "ini adalah method profil pada controller Mahasiswa";
}
function __construct(){
parent::__construct();
$this->load->model('Mahasiswa_model');
}
}
?>