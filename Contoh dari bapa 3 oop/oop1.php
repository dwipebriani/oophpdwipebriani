<?php
Class Orang {
	public $nama = 'uwi';
	public $jenisKelamin;

	public function makan()
	{
		return $this->nama.' sedang makan <br>';
	}
}

$saya = new Orang;
$saya->nama = 'dwi';
echo $saya->makan();

$saya->nama = 'febriani';
echo $saya->makan();
?>