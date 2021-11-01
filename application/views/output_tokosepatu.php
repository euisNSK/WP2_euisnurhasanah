<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>transaksi toko sepatu</title>
</head>
<body>
	<center>
			<table>
				<tr>
					<th colspan="3">
						form output transaksi
					</th>
				</tr>
				<tr>
					<td colspan="3">
						<hr> 
					</td>
				</tr>
				<tr>
					<th>nama pembeli</th>
					<th>:</th>
					<td>
						<?= $nama; ?>
					</td>
				</tr>
				<tr>
					<th>nomor hp</th>
					<th>:</th>
					<td>
						<?= $nohp; ?>
					</td>
				</tr>
				<tr>
					<th>merek</th>
					<td>:</td>
					<td>
						<?= $merek; ?>					
					</td>
				</tr>
				<tr>
					<th>ukuran</th>
					<td>:</td>
					<td>
						<?= $ukuran; ?>
					</td>
				</tr>
				<tr>
					<th>harga</th>
					<td>:</td>
					<td>
						<?= $harga; ?>
					</td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						<a href="<?= base_url('tokosepatu'); ?>">kembali</a>
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>