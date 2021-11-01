<?php
class tokosepatu extends CI_Controller
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('model_tokosepatu');
	}
	public function index()
	{
		$this->load->view('input_tokosepatu');
	}
	public function cetak()
	{
		$this->form_validation->set_rules('nama', 'namapembeli',
		'required|min_length[3]',[
			'required' => 'nama pembeli harus di isi'
		]);
		$this->form_validation->set_rules('nohp', 'nomorhp',
		'required|min_length[3]',[
			'required' => 'nomor hp harus di isi'
		]);
		if ($this->form_validation->run() != true){
			$this->load->view('input_tokosepatu');
		} else{
		
		$data = [
			'nama' => $this->input->post('nama'),
			'nohp' => $this->input->post('nohp'),
			'merek' => $this->input->post('merek'),
			'ukuran' => $this->input->post('ukuran'),
			'harga' => $this->model_tokosepatu->proses($this->input->post('merek'))
		];
		$this->load->view('output_tokosepatu', $data);
		}
	}
}