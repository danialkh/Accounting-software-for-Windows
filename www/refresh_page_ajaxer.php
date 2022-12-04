<?php

			$directory = new DirectoryIterator('database');
			$num = 0;
			foreach ($directory as $fileinfo) {
				if ($fileinfo->isFile()) {
					if($fileinfo->getExtension() == 'txt'){
						
						if($num % 4 == 0){
								echo '<div style="display:inline-flex;">';
						}
						$num++;
						
						echo '<div class="name box linker" onclick="loadinfo(';
						echo "'";
						echo $fileinfo->getFilename();
						echo "'";
						echo ')">';
						echo '
								<div class="text">';
						
						$filename = $fileinfo->getPath() . "/" . $fileinfo->getFilename();
						$file = fopen($filename,"r");
						$line = fgets($file);
						echo $line;						
						fclose($file);
						
						
						echo '</div>
								</div>';
								
						if($num % 4 == 0)
							echo '</div>';
						
					}
				}
			}

		?>