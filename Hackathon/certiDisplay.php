<?php

if (isset($_POST['submit'])) {
	$img = $_POST['certificate'];
	
}

echo $img;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Certificate</title>
</head>
<body>

	<?php 

			echo "<img src='".$_POST['certificate']."' style='width:100%; height:auto;'>";

	?>

</body>
</html>