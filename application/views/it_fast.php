<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Pendaftaran Lomba
    <?php echo form_open_multipart('himatif/tambah_aksi');?>
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>kelas</td>
				<td><input type="text" name="kelas"></td>
			</tr>
            <tr>
				<td>Angkatan</td>
				<td><input type="text" name="angkatan"></td>
			</tr>
            <tr>
				<td>lomba</td>
				<td> <select name="lomba">
                    <optgroup label="Sport">
                    <option value="Badminton">Badminton</option>
                    <option value="Futsal">Futsal</option>
                    <optgroup label="E-Sport Competiton">
                    <option value="Mobile Legend">Mobile Legend</option>
                    <option value="PUBG Mobile">PUBG Mobile</option>
                    <optgroup label="Workshop">
                    <option value="Jaringan">Jaringan</option>
                    <option value="Programming">Programming</option>
                    <optgroup label="IT Competition">
                    <option value="Poster Competition">Poster Competition</option>
                    <option value="IOT Competition">IOT Competition</option>
                    <option value="UI/UX Competition">UI/UX Competition</option>
                    <option value="Film Competition">Film Competition</option>
                    <optgroup label="Seminar">
                    <option value="Seminar">Seminar</option>
                </select> </td>
			</tr>
            <tr>
				<td>Pembayaran</td>
				<td><input type="text" name="pembayaran"></td>
			</tr>
            <tr>
				<td>Bukti Pembayaran</td>
				<td><input type="file" name="foto"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
        <?php echo form_close(); ?>
</body>
</html>