<?php
namespace app\Controllers;

use CodeIgniter\Controller;
use App\Models\Modeliuran;

class Iuran extends Controller
{
	
	public function index()
	{
		$irn = new Modeliuran();
		$data = [
			'tampildata' => $irn->tampildata()->getResult()
		];
		echo View('viewtampiliuran', $data);
	}
	public function viewtampiliuran()
	{
		helper('form');
		echo View('viewtampiliuran');
	}
	public function formtambah()
	{
		helper('form');
		echo View('viewformtambahiuran');
	}
	public function simpandata()
	{
		$data = [
			'keterangan' => $this->request->getpost('keterangan'),
			'tanggal' => $this->request->getpost('tanggal'),
			'bulan' => $this->request->getpost('bulan'),
			'tahun' => $this->request->getpost('tahun'),
			'jumlah' => $this->request->getpost('jumlah'),
			'warga_id' => $this->request->getpost('warga_id'),
		];

		$irn = new Modeliuran();

		$simpan = $irn->simpan($data);

		if($simpan)
		{
			return redirect()->to('/iuran/index');
		}
	}
	function hapus()
	{
		$uri = service('uri');
		$warga_id = $uri->getSegment('3');

		$wrg = new Modeliuran();

		$wrg->hapusdata($warga_id);

		return redirect()->to('/warga/index');
	}
	function formedit(){
		helper('form');
		$uri = service('uri');
		$warga_id = $uri->getSegment('3');

		$wrg = new Modeliuran();

		$ambildata = $wrg->ambildata($warga_id);

		if(count($ambildata->getResult()) > 0){
			$row = $ambildata->getRow();
			$data = [
				'keterangan' => $row->keterangan,
				'tanggal' => $row->tanggal,
				'bulan' => $row->bulan,
				'tahun' => $row->tahun,
				'jumlah' => $row->jumlah,
			]; 

			echo View('viewformeditiuran',$data);
		}
	}
	function updatedata(){
		$warga_id = $this->request->getpost('warga_id');
		$data = [
			'keterangan' => $this->request->getpost('keterangan'),
			'tanggal' => $this->request->getpost('tanggal'),
			'bulan' => $this->request->getpost('bulan'),
			'tahun' => $this->request->getpost('tahun'),
			'jumlah' => $this->request->getpost('jumlah'),
			'warga_id' => $this->request->getpost('warga_id'),
		];

		$wrg = new Modeliuran();

		$update = $wrg->editdata($data, $warga_id);

		if($update)
		{
			return redirect()->to('/iuran');
		}
	}

}
