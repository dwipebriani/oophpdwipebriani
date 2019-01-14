<?php 

// define('NAMA', 'Dwi pebriani');
// echo NAMA;

// echo "<br>";

// const UMUR = 32;
// echo UMUR;








// class Coba {
// 		const NAMA = 'Dwi';
// }

// echo Coba::NAMA;


// echo__FILE__;

// function Coba(){
// 	return __FUNCTION__;
// } 

// echo coba();


class Coba {

	public $kelas = __CLASS__;
 }
$obj = new Coba;
echo $obj->kelas;