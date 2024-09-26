


<!DOCTYPE html>
<html>
<head>
	<title>Visitor Counter</title>
</head>
<body>
	<?php
		$filename = "count.txt";
		$handle = fopen($filename, "r");
		$visitor_count = fread($handle, filesize($filename));
		fclose($handle);
		
		$visitor_count++;
		
		$handle = fopen($filename, "w");
		fwrite($handle, $visitor_count);
		fclose($handle);
	?>
	
	<p>Visitor Count: <?php echo $visitor_count; ?></p>
</body>
</html>


