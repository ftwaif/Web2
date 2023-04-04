<?php
    require_once 'db_koneksi.php';

    $sqljenis = "SELECT * FROM pembelian";
    $rowjenis = $conn->prepare($sqljenis);
    $rowjenis->execute();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Form Input Data</title>
</head>
<body>
	<a href="index.php">
        <h2>HOME</h2>
    </a>
	<form method="post" action="index.php">
		<label for="tanggal">Tanggal:</label>
		<input type="date" id="tanggal" name="tanggal"><br><br>
		
		<label for="nomor">Nomer:</label>
		<input type="text" id="nomor" name="nomor"><br><br>

        <label for="produk_id">Produk ID:</label>
		<input type="number" id="produk_id" name="produk_id"><br><br>

        <label for="jumlah">Jumlah:</label>
		<input type="number" id="jumlah" name="jumlah"><br><br>

        <label for="harga">Harga:</label>
		<input type="text" id="harga" name="harga"><br><br>

        <label for="vendor_id">Vendor ID:</label>
		<input type="number" id="vendor_id" name="vendor_id"><br><br>
		
		<input type="submit" value="Simpan" name="submit">
	</form>
</body>
</html>