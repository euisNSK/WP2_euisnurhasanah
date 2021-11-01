<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>transaksi toko sepatu</title>
</head>
<body>
	<center>
		<form action="<?= base_url('tokosepatu/cetak'); ?>" method="post">
			<table>
				<tr>
					<th colspan="3">
						form input transaksi
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
						<input type="text" name="nama" id="nama">
						<?= form_error('nama', '<br><span style="color : red;">', '</span>'); ?>
					</td>
				</tr>
				<tr>
					<th>nomor hp</th>
					<th>:</th>
					<td>
						<input type="text" name="nohp" id="nohp">
						<?= form_error('nohp', '<br><span style="color : red;">', '</span>'); ?>
					</td>
				</tr>
				<tr>
					<th>merek</th>
					<td>:</td>
					<td>
						<select name="merek" id="merek">
						<option>--pilih merek--</option>
						<option value="nike">nike</option>
						<option value="adidas">adidas</option>
						<option value="kickers">kickers</option>
						<option value="eiger">eiger</option>
						<option value="bucherri">bucherri</option>
						</select>					
					</td>
				</tr>
				<tr>
					<th>ukuran</th>
					<td>:</td>
					<td>
						<select name="ukuran" id="ukuran">
						<option>--pilih ukuran--</option>
						<?php for($i = 32; $i <= 44; $i++): ?>
							<option value="<?= $i; ?>"><?= $i; ?></option>
						<?php endfor; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						<hr>
						<button type="submit" class="btn btn-primary">simpan</button>
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>