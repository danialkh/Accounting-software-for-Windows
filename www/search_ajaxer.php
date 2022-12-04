<?php
	
	$karbar_name = $_POST['name'];
	
	$directory = new DirectoryIterator('database');
	$num = 0;
	foreach ($directory as $fileinfo) {
		if ($fileinfo->isFile()) {
			if($fileinfo->getExtension() == 'txt'){
				
				$filename = $fileinfo->getPath() . "/" . $fileinfo->getFilename();
				$file = fopen($filename,"r");
				$line = fgets($file);
				

				
				if($line == $karbar_name OR $line == $karbar_name."\n"){
					
					echo '<div class="name box linker" onclick="loadinfo(';
					echo "'";
					echo $fileinfo->getFilename();
					echo "'";
					echo ')">';
					echo '
						<div class="text">';	
					echo $karbar_name;					
					echo '</div>
							</div>';			
				}
				
				fclose($file);			
				
			}
		}
	}		
	
	
?>