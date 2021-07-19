<?php
namespace App\Models;

use CodeIgniter\Model;
class Modelwarga extends Model
{
	function __construct()
	{
		$this->db = db_connect();
	}

	function tampildata(){
		return $this->db->table('warga') 
		->get();
	}

	function simpan($data)
	{
		return $this->db->table('warga')->insert($data);
	}

	function hapusdata($id){
		return $this->db->table('warga')->delete(['warga_id' => $id]);
	}

	function ambildata($nik){
		return $this->db->table('warga')->getWhere(['nik' => $nik]);
	}
	function editdata($data, $nik){
		return $this->db->table('warga')->update($data, ['nik' => $nik]);
	}
}