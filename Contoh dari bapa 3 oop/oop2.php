<?php
Class OrangTua {
	public $nama = 'uwi' ;
	public $jenisKelamin = "laki-laki";

	public function makan() {
		return "{$this->nama} sedang makan <br>";
	}
	}

Class AnakOrang extends OrangTua {

	public function biodata() {
		return "Nama : {$this->nama} <br>".
				"jenis Kelamin : {$this->jenisKelamin} <br>".
				"=========================================<p>";
	}
}

$anak = new AnakOrang;
$anak->nama = 'dwi';
$anak->jenisKelamin = 'perempuan';
echo $anak->biodata();
echo $anak->makan();
