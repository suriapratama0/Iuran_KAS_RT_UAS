<?php
namespace app\Controllers;

use CodeIgniter\Controller;
use App\Models\Modelwarga;
use App\Models\Modeliuran;

class Warga extends Controller
{
	
	public function index()
	{
		$wrg = new Modelwarga();
		$data = [
			'tampildata' => $wrg->tampildata()->getResult()
		];

		echo View('viewtampilwarga', $data);
	}
	public function iuran()
	{
		$irn = new Modeliuran();
		$data = [
			'tampildata' => $irn->tampildata()->getResult()
		];
		helper('form');
		echo View('viewtampiliuran', $data);
	}
	public function formtambah()
	{
		helper('form');
		echo View('viewformtambah');
	}
	public function simpandata()
	{
		$data = [
			'id' => $this->request->getpost('id'),
			'nik' => $this->request->getpost('nik'),
			'nama' => $this->request->getpost('nama'),
			'kelamin' => $this->request->getpost('kelamin'),
			'alamat' => $this->request->getpost('alamat'),
			'no_rumah' => $this->request->getpost('no_rumah'),
			'status' => $this->request->getpost('status'),
		];

		$wrg = new Modelwarga();

		$simpan = $wrg->simpan($data);

		if($simpan)
		{
			return redirect()->to('/warga/index');
		}
	}
	function hapus()
	{
		$uri = service('uri');
		$id = $uri->getSegment('3');

		$wrg = new Modelwarga();

		$wrg->hapusdata($id);

		return redirect()->to('/warga/index');
	}

	function formedit(){
		helper('form');
		$uri = service('uri');
		$nik = $uri->getSegment('3');

		$wrg = new Modelwarga();

		$ambildata = $wrg->ambildata($nik);

		if(count($ambildata->getResult()) > 0){
			$row = $ambildata->getRow();
			$data = [
				'nik' => $nik,
				'nama' => $row->nama,
				'kelamin' => $row->kelamin,
				'alamat' => $row->alamat,
				'no_rumah' => $row->no_rumah,
				'status' => $row->status,
			]; 

			echo View('viewformedit',$data);
		}
	}
	function updatedata(){
		$nik = $this->request->getpost('nik');
		$data = [
			'nama' => $this->request->getpost('nama'),
			'kelamin' => $this->request->getpost('kelamin'),
			'alamat' => $this->request->getpost('alamat'),
			'no_rumah' => $this->request->getpost('no_rumah'),
			'status' => $this->request->getpost('status'),
		];

		$wrg = new Modelwarga();

		$update = $wrg->editdata($data, $nik);

		if($update)
		{
			return redirect()->to('/warga/index');
		}
	}
	
}