<?php

	$db = new mysqli("localhost","root","","11rpl1_db");
	if (mysqli_connect_errno()) {
		echo "Error : " . mysqli_connect_error();
	}else{
		//echo "SUKSES";
	}


?>
<table border="1" cellpadding="10px" cellspacing="0">
	<thead>
		<tr>
			<th>ID</th>
			<th>NAMA</th>
			<th>JK</th>
			<th>NOMOR HP</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$sql = " SELECT * FROM siswa; "; //Query SQL
		$result = $db->query($sql); // Execute Query SQL
		$no = 1;
		while ($row = $result->fetch_assoc()) { //Menampilkan bentuk array
			echo "
			<tr>
				<td>". $no ."</td>
				<td>". $row["nama_lengkap"] ."</td>
				<td>". $row["jk"] ."</td>
				<td>". $row["no_hp"] ."</td>
			</tr>
			";
			$no++;
		} 	
	?>
	</tbody>
</table>