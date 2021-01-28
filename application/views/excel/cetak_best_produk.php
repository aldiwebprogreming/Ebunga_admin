<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data best product.xlsx");
?>

<h3>Data Produk Terlaris</h3>
		
<table border="1" cellpadding="5">
	<tr>
		<th>No</th>
        <th>Kd Product</th>
        <th>Jumlah Order</th>
        <th>Jumlah qt</th>
        <th>Jumlah Transaksi</th>
      
	</tr>
	<?php
	$no = 1;
	foreach ($best as $data) { ?>
	<tr>
		<td><?= $no++; ?></td>
		<td><?= $data['kd_product'] ?></td>
        <td><?= $data['jml'] ?></td>
        <td><?= $data['qt'] ?></td>
       <td>Rp. <?= $data['total'] ?></td>
                                      
	</tr>

<?php } ?>
</table>
