<?php
	session_start();
	include_once("config.php");

	$nama = $_SESSION['nama'];
	$lives = $_SESSION['lives'];
	$score = $_SESSION['score'];
	$email = $_SESSION['email'];
	
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
	<center><h3>Hello <?php echo $_SESSION['nama'];?>, Sayang permainan sudah selesai. Semoga kali lain bisa lebih baik.</h3>
	<h3>Score Anda : <?php echo $_SESSION['score'];?></h3>
	<a href="index.php">Main Lagi?</a>

	<br>
	<h3>HALF OF FAME</h3>
	<table>
		<thead>
			<tr>
				<td>No</td>
				<td>Nama</td>
				<td>Score</td>
			</tr>
		</thead>
		<tbody>
			<?php 
				$result = mysqli_query($mygame, "SELECT * FROM gamescore ORDER BY score DESC limit 10");
				$no = 0;
				while ($user_data = mysqli_fetch_array($result)) {
				# code...
					$no += 1;
					echo "<tr>";
					echo "<td>$no</td>";
					echo "<td>".$user_data['name']."</td>";
					echo "<td>".$user_data['score']."</td></tr>";
				}
				$result = mysqli_query($mygame, "INSERT INTO gamescore(name,email,score) VALUES ('$nama', '$email', '$score')");
			 ?>
		 </tbody>
	</table></center>
</body>
</html>