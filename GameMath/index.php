<?php
	session_start();
	$_SESSION['score'] = 0;
	$_SESSION['lives'] = 5;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Math Game</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<?php
		if (isset($_SESSION['email'])) {
			# code...
		?>
		<p><center><b>Hello <?php echo $_SESSION['nama'];?>, selamat datang kembali di permainan ini!!! <a href="question.php">[START GAME]</a></center></p>
		<br> 
		<p><center>Bukan anda? <a href="player.php">(klik disini)</a></b></center></p>
		<?php
		} else {
		?>
		<form action="question.php" method="post">
			<table> <center>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" placeholder="Masukan Nama" required></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" placeholder="Masukan Email" required></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="start" value="START"></td>
				</tr>
			</center></table>
		</form>
		<?php
		}
		?> 
</body>
</html>