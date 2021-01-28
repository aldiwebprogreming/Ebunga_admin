<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=detail data best product.xlsx");
?>

<h3>Detail Produk Terlaris</h3>
		
<table border="1" cellpadding="5">
	<tr>
		<th>No</th>
        <th>Kd Temp</th>
        <th>Customer</th>
        <th>Waktu</th>
        <th>Kd Produk</th>
        <th>Qt</th>
        <th>Total</th>
	</tr>
	<?php
	$no = 1;
	foreach ($produk_terlaris as $data) { ?>
	<tr>
		<td><?= $no++; ?></td>
		<td><?= $data['kd_temp'] ?></td>
        <td><?= $data['customer'] ?></td>
        <td><?= $data['waktu'] ?></td>
       <td><?= $data['kd_product'] ?></td>
        <td><?= $data['qt'] ?></td>
        <td><?= $data['total'] ?></td>
                                      
	</tr>

<?php } ?>
</table>
