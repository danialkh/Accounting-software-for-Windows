تعداد کاربر ها : 
						<?php

							$directory = new DirectoryIterator('database');
							$num = 0;
							foreach ($directory as $fileinfo) {
								if ($fileinfo->isFile()) {
									if($fileinfo->getExtension() == 'txt'){
										$num++;
									}
								}
							}
							echo $num;
					?>