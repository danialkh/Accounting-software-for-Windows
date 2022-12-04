<?php
			$filename = 'database/' . $_POST['filename'];
			$file = fopen($filename,"r");
			
			$line_num = 0;
			
			$daryafti_temp = 0;
			$pardakhti_temp = 0;
			
			$daryafti = 0;
			$pardakhti = 0;
			
			while (!feof($file)) {
				$line_num++;
				$line = fgets($file);
				
				if($line_num  == 1)
					$name = $line;
				
				if($line_num > 1){
					$pieces = explode("_", $line);
										
					if($pieces[4] == 1){
						$pardakhti_temp += $pieces[0];
					}
					else{
						$daryafti_temp += $pieces[0];
					}
				}				
			}
			
			if($pardakhti_temp > $daryafti_temp){
					$pardakhti = $pardakhti_temp - $daryafti_temp;
					$daryafti = 0;
			}
			else{
				$daryafti = $daryafti_temp - $pardakhti_temp ;
				$pardakhti = 0;
			}
			
			fclose($file);
?>
<div class="close_alert linker">
	<img src="img/close.svg" width="15px" height="15px">
</div> 
<center>
<div class="space"></div>	
<div class="space"></div>
<div class="space"></div>
<div class="cadr_box">
	<div style="display:inline-flex" dir="rtl">
		<div class="home_cadr" style="width:290px;">
			<div class="text">
					<?php echo $name ?>
			</div>
		</div>
		<div class="home_cadr" style="width:210px;">
			<div class="text">
					مبلغ بدهکاری : 
					<?php echo $daryafti ?>
					ريال
			</div>
		</div>
		<div class="home_cadr" style="width:210px;">
			<div class="text">
					مبلغ بستانکاری : 
					<?php echo $pardakhti ?>
					ریال
			</div>
		</div>
		<div class="home_cadr" style="width:160px;">
			<div class="linker" id="remove_karbar" style="display:flex;margin-top:1px;margin-left:30px;float:left" dir="rtl">
				<div class="text" style="font-size:14.6pt;margin-top:0px;">
						حذف کاربر
				</div>
				&nbsp;
				<img width="20px" height="20px" src="img/delete.svg">
			</div>
		</div>
	</div>
</div>
<br>
<div class="space"></div>
<div class="space"></div>
<div class="cadr_box">
	<div class="text title_box">
		پرداخت
	</div>
	<div style="display:inline-flex;margin-top:16px;" dir="rtl">
		<input class="txt tData" id="txt_pardakht_mablagh" placeholder="مبلغ را وارد کنید">
		<input class="txt tData" id="txt_pardakht_babat" placeholder="بابت" style="width:350px;">
		<div class="text btn linker" id="submit_pardakht" style="padding:2px 7px 4px 7px;font-size:13pt;border">
			ثبت پرداخت
		</div>
	</div>
</div>

<br><div class="space"></div>

<div class="cadr_box">
	<div class="text title_box">
		دریافت
	</div>
	<div style="display:inline-flex;margin-top:16px;" dir="rtl">
		<input class="txt tData" id="txt_bestan_mablagh" placeholder="مبلغ را وارد کنید">
		<input class="txt tData" id="txt_bestan_babat" placeholder="بابت" style="width:350px;">
		<div class="text btn linker" id="submit_bestan" style="padding:2px 7px 4px 7px;font-size:13pt;border">
			ثبت دریافت
		</div>
	</div>
</div>

<br><div class="space"></div>

<div class="cadr_box" style="height:300px;">
	<div class="text title_box">
		تاریخچه رویدادها
	</div>
	
	
	<div style="display:inline-flex;margin-top:20px;margin-right:23px;" dir="rtl">
		<div class="home_cadr roydad_title" style="width:160px;">
			<div class="text">
					مبلغ
			</div>
		</div>
		<div class="home_cadr roydad_title" style="width:370px;">
			<div class="text">
					بابت
			</div>
		</div>
		<div class="home_cadr roydad_title" style="width:90px;">
			<div class="text">
					تاریخ
			</div>
		</div>
		<div class="home_cadr roydad_title" style="width:90px;">
			<div class="text">
					ساعت
			</div>
		</div>
		<div class="home_cadr roydad_title" style="width:122px;">
			<div class="text">
					پرداخت/دریافت
			</div>
		</div>
	</div>
	
	<div style="overflow-x:auto;overflow-y:scroll;height:220px;width:855px;margin-top:3px;" dir="ltr">
	
		
		<?php

			$filename = 'database/' . $_POST['filename'];
			$file = fopen($filename,"r");
			$a = array();
			
			
			$line_num = 0;
			
			while (!feof($file)) {
				$line_num++;
				$line = fgets($file);
				
				if($line_num > 1){
					$pieces = explode("_", $line);
					
					$str= '
					
					<div class="space"></div>
					<div class="roydad_row">
						<div style="display:inline-flex" dir="rtl">
							<div class="roydad_row_home" style="width:160px;">
								<div class="text">';
									$str .= $pieces[0];
									$str .='
									ریال
								</div>						
							</div>
							<div class="roydad_row_home" style="width:370px;">
								<div class="text">';
									$str .= $pieces[1]; 
									$str .= '
								</div>						
							</div>
							<div class="roydad_row_home" style="width:90px;">
								<div class="text">';
									$str .= $pieces[2]; 
									$str .= '
								</div>						
							</div>
							<div class="roydad_row_home" style="width:90px;">
								<div class="text">';
									$str .= $pieces[3]; 
									$str .= '
								</div>						
							</div>
							<div class="roydad_row_home" style="width:122px;border-left:0px solid">
								<div class="text">';
									if($pieces[4] == 1){
										$str .= "پرداخت شد"; 
									}
									else{
										$str .= "دریافت شد";
									}
									$str .= '
								</div>						
							</div>
						</div>
					</div>';					
					
					array_push($a,$str);
				}	
				
			}
			
			
			for($i = 1;$i < $line_num;$i++)
				echo array_pop($a);
			
			fclose($file);
		?>
	

		
	</div>
</div>