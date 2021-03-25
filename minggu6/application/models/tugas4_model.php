<?php 
class tugas4_model extends CI_Model {
    public function get_data()
	{
        $data_mahasiswa = [
			["nama"=>"Asa Brilian Ananda","nim"=>"E31191800"],
			["nama"=>"queen of pain","nim"=>"E3119876"],
			["nama"=>"troll","nim"=>"E31123456"] 
        ];
        return $data_mahasiswa;
	}
}
?>