<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data ecash.xlsx");
?>

<h3>Data Ecash</h3>
		
<table border="1" cellpadding="5">
	<tr>
		 <th>No</th>
        <th>Kd Ecash</th>
        <th>User</th>
        <th>Token Verify</th>
         <th>Next Token Verify</th>
        <th>Total</th>
	</tr>
	<?php
	$no = 1;
	foreach ($ecash as $data) { ?>
	<tr>
		<td><?= $no++; ?></td>
		<td><?= $data['kd_ecash'] ?></td>
		<td><?= $data['user'] ?></td>
		<td><?= $data['token_verify'] ?></td>
		<td><?= $data['next_token_verify'] ?></td>
		<td><?= $data['total'] ?></td>
	</tr>

<?php } ?>
</table>
