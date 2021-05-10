<?php
	session_start()
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
		$hasil = $_SESSION['hasil'];
		$answer = $_POST['answer'];
		if ($answer == $hasil) {
			# code...
			$_SESSION['score'] = $_SESSION['score'] + 10;
	?>
			<center><h3>Hello <?php echo $_SESSION['nama'];?>, Selamat jawaban Anda benar!!!</h3>
			<h3>Lives : <?php echo $_SESSION['lives'];?> | Score : <?php echo $_SESSION['score'];?></h3>
			<a href="question.php">[Soal Selanjutnya]</a></center>
	<?php
		}else{
			$_SESSION['score'] = $_SESSION['score'] - 2;
			$_SESSION['lives'] = $_SESSION['lives'] - 1;
	?>
			<center><h3>Hello <?php echo $_SESSION['nama'];?>, sayang jawaban Anda salah… tetap semangat ya !!!</h3>
			<h3>Lives : <?php echo $_SESSION['lives'];?> | Score : <?php echo $_SESSION['score'];?></h3>
			<a href="question.php">[Soal Selanjutnya]</a></center>
	<?php
		}
	?>

</body>
</html>