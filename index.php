<?php 
	/*
		Up or down checker
		Coded by João Artur (K3N1)
		www.github.com/JoaoArtur
		www.youtube.com/c/KeniGamer
	*/
		if (!isset($_POST['started'])) {
?>
<html>
<head>
	<title>Up or Down Checker</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<center>
		<form method="post">
			<h1>Up or down checker</h1>
			<input type="text" placeholder="Website url" name="url"><input type="hidden" name="started" value="started"><input type="submit" value=">>">
		</form>
	</center>
</body>
</html>
<?php
}else {
	$url=$_POST['url'];
	$context=file_get_contents("http://api.predator.wtf/upordown/?arguments=".$url);
	?>
	<html>
	<head>
		<title>Up or Down Checker</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<center>
			<h1>Up or down checker</h1>
			<h2><?php echo $context; ?></h2>
		</center>
	</body>
	</html>
	<?php
}
?>