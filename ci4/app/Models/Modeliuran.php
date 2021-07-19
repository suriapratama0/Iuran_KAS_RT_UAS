<?php
namespace App\Models;

use CodeIgniter\Model;
class Modeliuran extends Model{
	function __construct()
	{
		$this->db = db_connect();
	}
	function tampildata(){
		return $this->db->table('iuran')
		->join('warga','warga.id=iuran.warga_id') 
		->get();

	}
	function simpan($data)
	{
		return $this->db->table('iuran')->insert($data);
	}
	function hapusdata($warga_id){
		return $this->db->table('iuran')->delete(['warga_id' => $warga_id]);
	}
	function ambildata($warga_id){
		return $this->db->table('iuran')->getWhere(['warga_id' => $warga_id]);
	}
	function editdata($data, $warga_id){
		return $this->db->table('iuran')->update($data, ['warga_id' => $warga_id]);
	}
	
}

?>
