<html lang="fa" dir="rtl">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src="js/jquery.js"></script>
<script src="persianumber.js"></script>
<link href="https://fonts.googleapis.com/css?family=Markazi+Text&display=swap" rel="stylesheet">
<style>
:root{
	--mainColor1-color : #4fd8bf;
	--mainColor2-color : #54e3c9;
}
body{
	-moz-user-select: none;
	-khtml-user-select: none;
	-webkit-user-select: none;
	-ms-user-select: none;
	user-select: none;
	
	padding:0px;
	margin:0px;
}
#main{
	width:920px;
	//background-color:#84dda7;
	background-color:var(--mainColor1-color);
	padding:15px;
	border-radius:3px;
}
.box{
	background:white;
	border-radius:4px;
}
.name{
	-moz-user-select: none;
	-khtml-user-select: none;
	-webkit-user-select: none;
	-ms-user-select: none;
	user-select: none;

	width:180px;
	height:20px;
	padding:16px 15px 17px 15px;

	cursor:pointer;
	margin:4px;
}
.text{
	font-family: 'Markazi Text', serif;
	font-size:11.6pt;
}
.space{
	height:4px;
}
.home_bala{
	height:40px;
	padding-top:10px;
	//background-color:red;
}
.linker{
	cursor:pointer;
}
.linker:hover{
	transform:scale(1.025);
}
.linker:active{
	transform:scale(0.99);
}
#notification{
	position:fixed;
	top:-90px;
	left:calc(50% - 100px);
	height:20px;
	border-radius:5px;
	width:200px;
	background-color:black;
	color:white;
	z-index:15;
	padding:15px 15px 17px 15px;
}
#notification .text{
	color:white;
}
.alertDialog{
	background-color:white;
	border-radius:3px;
	position:absolute;
}
#alertDialog_info{
	width:900px;
	height:600px;
	left:calc(50% - 450px);
	top:calc(50% - 300px);
	transform:scale(0);
	transition:all ease 0.25s;
	z-index:5;
}
#alertDialog_add{
	width:300px;
	height:200px;
	left:calc(50% - 150px);
	top:calc(50% - 100px);
	transform:scale(0);
	transition:all ease 0.25s;
	z-index:5;
}
#alertDialog_delete{
	width:300px;
	height:140px;
	left:calc(50% - 150px);
	top:calc(50% - 70px);
	transform:scale(0);
	transition:all ease 0.25s;
	z-index:8;
	
}
#darkness_delete{
	top:0px;
	left:0px;
	position:fixed;
	background-color:black;
	opacity:0.25;
	width:100%;
	height:100%;
	visibility:hidden;	
	z-index:6;	
}
#darkness{
	top:0px;
	left:0px;
	position:fixed;
	background-color:black;
	opacity:0.25;
	width:100%;
	height:100%;
	visibility:hidden;	
	z-index:1;
}
.cadr_box{
	width:870px;
	height:64px;
	border:1px solid var(--mainColor1-color);
	position:relative;
	border-radius:3px;
}
.txt{
	width:200px;
	padding:5px;
	height:31px;
	border:none;
	border-radius:2px;
	font-family:'Markazi Text', serif;
	text-align:center;
	outline:none;
	font-size:11.8pt;
}
.txt:hover{
	transform:scale(1.015);
}
.tData{
	border:1px solid var(--mainColor1-color);
	margin-left:5px;
}
.btn{
	border:1px solid var(--mainColor1-color)
}
.title_box{
	position:absolute;
	right:15px;
	top:-15px;
	padding:1px 10px 2px 10px;
	background-color:white;
	font-size:13.5pt !important;
	border:1px solid var(--mainColor1-color);
	border-radius:3px;
}
.home_cadr{
	height:44px;
	padding-top:20px;
	//background:red;
}
.home_cadr .text{
	font-size:14.5pt;
}
.roydad_title{
	height:30px;
	padding-top:8px;
	background-color:var(--mainColor2-color);
}
.roydad_title .text{
	font-size:13pt;
}
.roydad_row{
	width:830px;
	height:45px;
	border:1px solid var(--mainColor1-color);
	margin-right:8px;
	

}
.roydad_row_home{
	border-left:1px solid var(--mainColor1-color);
	height:33px;
	padding-top:12px;

}
.roydad_row_home .text{
	font-size:12pt;
}
.close_alert{
	position:absolute;
	top:-16px;
	right:-16px;
	width:15px;
	height:15px;
	padding:7px;
	background-color:white;
	z-index:6;
	border-radius:50%;
	border:1px solid var(--mainColor1-color);
}
#close_alert_delete{
	position:absolute;
	top:-16px;
	right:-16px;
	width:15px;
	height:15px;
	padding:7px;
	background-color:white;
	z-index:6;
	border-radius:50%;
	border:1px solid var(--mainColor1-color);	
}
</style>
<div id="notification">
	<center>
		<div style="font-size:13.4pt" class="text"></div>
	</center>
</div>
<div id="darkness"></div>
<div id="darkness_delete"></div>
<div class="alertDialog" id="alertDialog_info"></div>
<div class="alertDialog" id="alertDialog_delete">
	<div class="linker" id="close_alert_delete">
		<img src = "img/close.svg">
	</div>
	<center>
		<br><br>
		<div class="text" style="font-size:12.6pt;">
			آیا از حذف این کاربر مطمعن هستید؟
		</div>
		<div class="space"></div>
		<br>
		<div class = "text btn linker" id="submit_remove" style="width:35px;padding: 2px 7px 4px 7px;font-size: 13pt;margin-left:5px;">بله</div>
		
	</center>
</div>
<div class="alertDialog" id="alertDialog_add">
	<div class="close_alert linker">
		<img src = "img/close.svg">
	</div>
	<center>
		<br><br>
		<div class="text" style="font-size:12.6pt;">
			برای افزودن شخص نام و نام خانوادگی را وارد کنید
		</div>
		<br>
		<input class="txt tData" id ="txt_add" placeholder="نام و نام خانوادگی را وارد کنید">
		<div class="space"></div>
		<br>
		<div class = "text btn linker" id="submit_add" style="width:35px;padding: 2px 7px 4px 7px;font-size: 13pt;margin-left:5px;">ثبت</div>
		
	</center>
</div>
<center>
<br>
<div id="main">
	<div class="box" style="width:890px;height:50px;">
			<div style="display:flex;" dir="rtl">
				<div class="home_bala" style="width:130px;margin-top:3px;">
					<div class="text" id="tedad" style="font-size:13pt;margin-top:1px;">
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
					</div>
				</div>
				<div class="home_bala" style="width:660px;">
					<div class="text" style="font-size:18.5pt;margin-top:-1px;">
						نرم افزار حسابرسی قصابی
					</div>
				</div>
				<div class="home_bala" style="width:140px;">
					<div class="linker" id="add_karbar" style="display:flex;margin-top:3px;" dir="rtl">
						<div class="text" style="font-size:14.5pt;margin-top:1px;">
							افزودن کاربر
						</div>
						&nbsp;
						<img src="img/plus.svg" width="25px" height="25px">
					</div>
				</div>
		</div>
	</div>
	<br>
	<div style="display:inline-flex;" dir="rtl">
		<input class="txt" id="txt_search" placeholder="نام را وارد کنید">
		&nbsp;&nbsp;
		<div class="text box linker" id="search_btn" style="padding:4px 7px 6px 7px;font-size:13pt;">
			جستجو
		</div>
		&nbsp;&nbsp;
		<div class="text box linker" id="seeAll_btn" style="padding:4px 7px 6px 7px;font-size:13pt;">
			نمایش همه
		</div>
	</div>
	<br><br>
	<div style="overflow-x:auto;overflow-y:scroll;height:430px;width:900px;" id = "main_scroll" dir="ltr">
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
		
		
	</div>
</div>

<script>
function refresh_page(){
	
	
	
	$("#txt_search").val('');
	
	var alaki = "alaki";
	
	$.ajax({
			url: 'refresh_page_ajaxer.php',
			type: 'post',
			data: {alaki:alaki},
			dataType: 'HTML',
			success: function(response){
				$("#main_scroll").html(response);
				
				$(".name").click(function(){
					$("#darkness").css({"visibility":"visible"});
					$("#alertDialog_info").css({"transform":"scale(1)"});
				});
				
				$.ajax({
						url: 'tedad_ajaxer.php',
						type: 'post',
						data: {alaki:alaki},
						dataType: 'HTML',
						success: function(response){
							$("#tedad").html(response);
							
						}		
				});
				
				
			}		
	});
	
}
function loadinfo(filename){
	$("document").ready(function(){		
		$("#alertDialog_info").html('');


		$.ajax({
			url: 'loadinfo_ajaxer.php',
			type: 'post',
			data: {filename:filename},
			dataType: 'HTML',
			success: function(response){
				
				$("#alertDialog_info").html(response);


				$(".close_alert").click(function(){
					$("#darkness").css({"visibility":"hidden"});
					$(".alertDialog").css({"transform":"scale(0)"});
				
				});
			
				$("#submit_pardakht").click(function(){
					var check = false;
					
					var mablagh = $("#txt_pardakht_mablagh").val();
					var babat = $("#txt_pardakht_babat").val();
					
					if (isNaN(mablagh) || mablagh == ''){
						$("#notification").find(".text").html("لطفا در قسمت مبلغ عدد وارد کتید");	
						$("#notification").animate({"top":"60px"},250).delay(750).animate({"top":"-90px"},150);
					}
					else{
						if (babat == ''){
							$("#notification").find(".text").html("لطفا توضیحات پرداخت را وارد کنید");	
							$("#notification").animate({"top":"60px"},250).delay(750).animate({"top":"-90px"},150);
						}
						else
							check = true;
					}
					
					if(check){
						
						var p_b = 1;
					
						$.ajax({
								url: 'pb_ajaxer.php',
								type: 'post',
								data: {filename:filename,mablagh:mablagh,babat:babat,p_b:p_b},
								dataType: 'HTML',
								success: function(response){
								
									loadinfo(filename);
									
														
									$("#notification").find(".text").html("پرداخت ثبت شد");	
									$("#notification").animate({"top":"60px"},250).delay(750).animate({"top":"-90px"},150);
									
								}
						});
					}
				});
				
				$("#submit_bestan").click(function(){
					var check = false;
					
					var mablagh = $("#txt_bestan_mablagh").val();
					var babat = $("#txt_bestan_babat").val();
					
					if (isNaN(mablagh) || mablagh == ''){
						$("#notification").find(".text").html("لطفا در قسمت مبلغ عدد وارد کتید");	
						$("#notification").animate({"top":"60px"},250).delay(750).animate({"top":"-90px"},150);
					}
					else{
						if (babat == ''){
							$("#notification").find(".text").html("لطفا توضیحات دریافت را وارد کنید1");	
							$("#notification").animate({"top":"60px"},250).delay(750).animate({"top":"-90px"},150);
						}
						else
							check = true;
					}
					
					if(check){
					

						var p_b = 0;
						
						$.ajax({
								url: 'pb_ajaxer.php',
								type: 'post',
								data: {filename:filename,mablagh:mablagh,babat:babat,p_b:p_b},
								dataType: 'HTML',
								success: function(response){
								
									loadinfo(filename);
									
									$("#notification").find(".text").html("دریافت ثبت شد");	
									$("#notification").animate({"top":"60px"},250).delay(750).animate({"top":"-90px"},150);
									
									
								}
						});
					}
					
				});
				
				
				
				$("#remove_karbar").click(function(){
					
					
					$("#darkness_delete").css({"visibility":"visible"});
					$("#alertDialog_delete").css({"transform":"scale(1)"});
					$("#txt_add").val('');
					
					$("#submit_remove").one('click', function() {
						$.ajax({
								url: 'delete_ajaxer.php',
								type: 'post',
								data: {filename:filename},
								dataType: 'HTML',
								success: function(response){
									
								
									$("#notification").find(".text").html("حذف کاربر انجام شد");	
									$("#notification").animate({"top":"60px"},250).delay(750).animate({"top":"-90px"},150);
								
								
									$("#darkness_delete").css({"visibility":"hidden"});
									$("#darkness").css({"visibility":"hidden"});
									$(".alertDialog").css({"transform":"scale(0)"});

									refresh_page();
								}
						});
					});	
					
					
				});
				
				//farsi 3 ta 3 ta
				
				$('.text').each(function(){
					var test = addComma($(this).html());
					$(this).html(test);
				});

				$('.text').persiaNumber();				
			}
			
		});
	});
}

</script>
<script>
$("document").ready(function(){
	
	$("#darkness").click(function(){
		$("#darkness").css({"visibility":"hidden"});
		$(".alertDialog").css({"transform":"scale(0)"});
	});
	
	$("#darkness_delete").click(function(){
		$("#darkness_delete").css({"visibility":"hidden"});
		$("#alertDialog_delete").css({"transform":"scale(0)"});
	});
	
	$(".close_alert").click(function(){
		$("#darkness").css({"visibility":"hidden"});
		$(".alertDialog").css({"transform":"scale(0)"});
	});
	
	$("#close_alert_delete").click(function(){
		$("#darkness_delete").css({"visibility":"hidden"});
		$("#alertDialog_delete").css({"transform":"scale(0)"});
	});
	
	



	$("#add_karbar").click(function(){
		$("#darkness").css({"visibility":"visible"});
		$("#alertDialog_add").css({"transform":"scale(1)"});
		$("#txt_add").val('');
	});
	
	
	

	$(".name").click(function(){
		$("#darkness").css({"visibility":"visible"});
		$("#alertDialog_info").css({"transform":"scale(1)"});
	});
	
	
	$("#seeAll_btn").click(function(){
		refresh_page();
	});

	$("#search_btn").click(function(){
		var name = $("#txt_search").val();
		
		$.ajax({
				url: 'search_ajaxer.php',
				type: 'post',
				data: {name:name},
				dataType: 'HTML',
				success: function(response){
					
					$("#main_scroll").html(response);
										
					$("#notification").find(".text").html("جستجو انجام شد");	
					$("#notification").animate({"top":"60px"},250).delay(750).animate({"top":"-90px"},150);

					$(".name").click(function(){
						$("#darkness").css({"visibility":"visible"});
						$("#alertDialog_info").css({"transform":"scale(1)"});
					});
				}
		});
	});
	
	
	
	
	$("#submit_add").click(function(){
		
		var name = $("#txt_add").val();
		
		$.ajax({
				url: 'add_ajaxer.php',
				type: 'post',
				data: {name:name},
				dataType: 'HTML',
				success: function(response){
					
										
					$("#notification").find(".text").html("کاربر اضافه شد");	
					$("#notification").animate({"top":"60px"},250).delay(750).animate({"top":"-90px"},150);
        						
					$("#darkness").css({"visibility":"hidden"});
					$(".alertDialog").css({"transform":"scale(0)"});
					
					refresh_page();
					
				}
		});

	});
	
});
</script>




<script>
function addComma( str ) {

	var objRegex = new RegExp( '(-?[0-9]+)([0-9]{3})' );
 
	while( objRegex.test( str ) ) {
		str = str.replace( objRegex, '$1,$2' );
	}
	return str;
}

$(document).ready(function(){



});
</script>
