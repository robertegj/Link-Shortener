<!doctype html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../assets/bootstrap.min.css" crossorigin="anonymous">
		<title>link shrink</title>
		<style>
		.list-group-item:hover {
			background-color: #007bff;
			color: white;
		}
		</style>
	</head>
	<body>
		<div class="container" style="margin-top:15vh;">
			<h1>Welcome to the <span class="text-primary"> link shrink/shortener</span></i></h1>
			<br>
			<form class="form-group" action="index.php" method="POST">
				<label for="url">Enter the URL you wish to shorten:</label>
				<input type="url" class="form-control" id="url" autofocus="autofocus" name="URL">
				<br>
				<input type="submit" class="btn btn-primary">
				<?php
				$host = $_SERVER['HTTP_HOST'] . "/";
				ini_set('display_errors', 1);
				ini_set('display_startup_errors', 1);
				error_reporting(E_ALL);
				if(isset($_POST["URL"])) {
					$url = $_POST["URL"];
					$redir = "<?php header('Location: $url'); ?>";
					$rand = rand(1,99999);
					file_put_contents($rand . ".php",$redir);
					$finURL = "https://" . $host . $rand . ".php";
					echo "Shortened URL: " . $finURL . " can be found at: <a href='$finURL'> $finURL </a>";
				}
				?>
			</form>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>