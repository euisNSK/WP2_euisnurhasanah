<?php
class model_tokosepatu extends CI_Model
{
	public $harga;
	public function proses($data)
	{
		if($data = "nike") {
			$this->harga = 375000;
		}
		elseif($data = "adidas") {
			$this->harga = 300000;
		}
		elseif($data = "kickers") {
			$this->harga = 250000;
		}
		elseif($data = "eiger") {
			$this->harga = 275000;
		}
		else{
			$this->harga = 400000;
		}

	return $this->harga;
	}
}