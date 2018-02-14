
<?php
date_default_timezone_set("Europe/Amsterdam");
$hour = date("H");
$date = date("H:i");

if ($hour >= 6 && $hour < 12) {
	$time = "Goede morgen! ";
	$class = "morgen";
}
if ($hour >= 12 && $hour < 18){
	$time = "Goede middag! ";
	$class = "middag";
}
 if ($hour >= 18 && $hour < 24){
	 $time = "Goeden avond! ";
 	 $class = "avond";
}

 if ($hour >= 0 && $hour < 6){
	 $time = "Goeden nacht! ";
 	 $class = "nacht";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Goede</title>
	<link rel="stylesheet" type="text/css" href="css/master.css">

</head>
<body class = "<?php echo $class ?>" >


	<h1 class="goedenxxx"> <?php echo $time?> </h1>
	<h1 class="hetIs"> <?php echo "Het is " , $date?> </h1>

</body>
</html>
