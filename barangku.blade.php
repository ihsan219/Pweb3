<?php

echo "
	<table  border='1' width='50%' align='center'>
		<tr> 
			<th colspan='2' align='center'><i>Barang Saya</i></th>
		</tr>
		<tr> 
			<th width='20%' align='center'>Nama Barang</th>
			<th width='20%' align='center'>Harga</th>
		</tr>	
		";
		for ($i=0;$i<=2;$i++) {
			echo"
				<tr>
					<td width='20%' align='center'>$barang[$i]</td>
					<td width='20%' align='center'>$harga[$i]</td>
				</tr>
			";
		}
	echo"</table>";
	
/*C:\xampp\htdocs\belajar-laravel1\resources\views*/