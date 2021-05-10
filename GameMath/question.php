<?php
	session_start();
	$x = rand(0,20);
	$y = rand(0,20);
	if (isset($_SESSION['nama'])) {
		# code...
	} else{
		$_SESSION['nama'] = $_POST['nama'];
		$_SESSION['email'] = $_POST['email'];
	}
	$lives = $_SESSION['lives'];
	$score = $_SESSION['score'];

	if ($lives == 0) {
		# code...
		header('Location: logout.php');
	} else {
		$_SESSION['hasil'] = $x + $y;
	}
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
	<form action="answer.php" method="post"><center>
		<h3>Hello <?php echo $_SESSION['nama'];?>, semangat ya… you can do the best!!</h3>
		<h3>Lives : <?php echo $_SESSION['lives']; ?> | Score : <?php echo $_SESSION['score']; ?></h3>
		<h3> Berapakah <?php echo $x; echo "+"; echo $y."?"; ?></h3>
		<input type="number" name="answer" placeholder="Masukan Jawaban Anda">
		<button type="submit" name="kirimjawab">Jawab</button></center>
	</form>

</body>
</html>