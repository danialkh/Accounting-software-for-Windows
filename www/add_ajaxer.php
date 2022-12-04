<?php

 $filename = 'database/' . time() . '.txt';

 $txt = $_POST['name'];
 $myfile = file_put_contents($filename, $txt);

?>