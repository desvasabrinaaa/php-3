<?php

// Tugasnya : buatkan sebuah array 1 dimensi dan lebih dari 1 dimensi
// Tampilkan dalam bentuk pengulangan foreach

 $arr1 = ['Luthfi', 'Desva', 'Vica', 'Anisa'];

 echo "1 DIMENSI :";
 echo "<hr>";

 foreach ( $arr1 as $arr ) {
  	echo "$arr <br>";
 }

echo "<hr>";

echo "2 DIMENSI :";
 echo "<hr>";

$arr2 = [[1,2,3], [4,5,6]];

 foreach ($arr2 as $arr) {
 	echo "$arr[0]";
 	echo "<br>";
 	echo "$arr[1]";
 	echo "<br>";
 	echo "$arr[2]";
 	echo "<br>";
 }

 echo "<hr>";

$arrr = ['Luthfi', 'Desva', 'Vica', 'Anisa'];

echo "1 DIMENSI :";
 echo "<hr>";
 print_r($arrr); // menampilkan seluruh string/isi dalam array


 echo "<hr>";

 echo "2 DIMENSI :";
 echo "<hr>";

 $arrrr = [[1,2,3], [4,5,6]];
print_r($arrrr); // menampilkan seluruh string/isi dalam array

 echo "<hr>";

 Array 1 Dimensi dengan Key
 $siswa = [
 	"nama" => "Desva",
 	"jk" => "P",
 	"kelas" => "XI RPL 1"
 ];

 echo "Nama saya : ".$siswa["nama"];
 echo "<br>";
 echo "Jenis Kelamin : ".$siswa["jk"];
 echo "<br>";
 echo "Kelas saya : ".$siswa["kelas"];
 echo "<br>";

//Array 2 Dimensi Dengan Key
$siswa = [
	[
		"nama" => "Aly",
		"jk" => "L",
		"kelas" => "XI RPL 1"
	],
	[
		"nama" => "Aina",
		"jk" => "P",
		"kelas" => "XI RPL 1"
	],
	[
		"nama" => "Nivia",
		"jk" => "P",
		"kelas" => "XI RPL 1"
	],
	[
		"nama" => "Ezard",
		"jk" => "L",
		"kelas" => "XI RPL 1"
	],
	[
		"nama" => "Gilang",
		"jk" => "L",
		"kelas" => "XI RPL 1"
	]
];

foreach ($siswa as $s) {
	echo "Nama : " . $s["nama"];
	echo "<br>";
	echo "Jenis Kelamin : " . $s["jk"];
	echo "<br>";	
	echo "Kelas : " . $s["kelas"];
	echo "<br>";
}

?>
