<?php
Class OrangTua {
protected $nama = 'uwi' ;
protected $jenisKelamin = "laki-laki";

public function setData($nm = 'dwi pebriani', $jk = 'laki-laki'){
		$this->nama = $nm;
		$this->jenisKelamin = $jk;
}

public function makan(){
	return "{$this->nama} sedang makan <br>";

}

}

Class AnakOrang extends OrangTua {
		public function biodata() {
			return "Nama : {$this->nama} <br>".
					"Jenis Kelamin : {$this->jenisKelamin} <br>".
					"==============================================<p>";
		}
}

$anak = new AnakOrang;
$anak->setData('dwi','perempuan');
echo $anak->biodata();
echo $anak->makan();
