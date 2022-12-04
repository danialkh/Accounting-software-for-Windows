<?php
		include ('jdf.php');
		
		$filename = 'database/' . $_POST['filename'];
		$mablagh = $_POST['mablagh'];
		$babat = $_POST['babat'];	
		$date = jstrftime('%Y/%m/%d');
		$time = jstrftime('%H:%M:%S');
		$p_b = $_POST['p_b'];
		
		
		$txt = "\n" . $mablagh . "_" . $babat . "_" . $date . "_" . $time . "_" . $p_b;
		
		echo $filename . "\n" . $txt;
		
		$myfile = file_put_contents($filename, $txt , FILE_APPEND);
?>
