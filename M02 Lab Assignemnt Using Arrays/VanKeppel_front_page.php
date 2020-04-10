<?php

//$pictures = array('frog.png', 'mango.png', 'cat.png');

//$dirname = "php-example/M02/images/";
//$images = glob($dirname."*.png");

//shuffle($pictures);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Brett's Picture Show</title>
	</head>
	<body>
		<h1>Brett's Picture Show</h1>
			<div align="center">
			<table style="width: 100%; border: 0">
				<tr>
				<?php
				$dirname = "images/";
				$images = glob($dirname."*.png");
				shuffle($images);
				
				/*for ($i = 0; $i < 3; $i++) {
					echo "<td style=\"width: 33%; text-align: center\">
						  //<img src=\"";
					echo $pictures[$i];
					echo "\"/></td>";
				} */
				
				foreach($images as $image) {
					echo '<img src="'.$image.'" />';
				}
				
				
				?>
				</tr>
			</table>
			</div>
	</body>
</html>	