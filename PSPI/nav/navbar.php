<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Education For All</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
</head>

<body>
	<nav id="navibar">
		<div class="logo">EducationForAll</div>
		<label for="btn" class="icon">
			<span class="fa fa-bars"></span>
		</label>
		<input type="checkbox" id="btn">
		<ul>
			<li><a href="../PSPI/home.php">Home</a></li>
			<li>
				<a href="../PSPI/information.php">Information</a>
				<input type="checkbox" id="btn-1">
			</li>
			<li>
				<a href="../PSPI/WaysToHelp.php">Ways to Help</a>
				<input type="checkbox" id="btn-2">
			</li>
			<li><a href="learn-now.php">Learn Now<span class="fa fa-caret-down"></span></a>
				<ul>
					<li><a href="../PSPI/learn-now.php#kids-section">Kids</a></li>
					<li><a href="../PSPI/learn-now.php#teenagers-section">Teenagers</a></li>
					<li><a href="../PSPI/learn-now.php#adults-section">Adults</a></li>
				</ul>
			</li>
			<li><a href="../PSPI/films.php">Docs/Films/Series</a></li>
			<li><a href="../PSPI/ContactUs.php">Contact Us</a></li>
			<li><?php include('logged-nav.php');?></li>
		</ul>
	</nav>
</body>

</html>