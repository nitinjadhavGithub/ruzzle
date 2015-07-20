<?php
include_once 'ruzzle_functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title></title>
	
	<!-- Bootstrap -->
	<!--<link href="public/css/bootstrap.css" rel="stylesheet">-->
	<link href="public/css/style.css" rel="stylesheet">
	<style type="text/css">
		body { background:#3399FF;}
		.table1 td {  width:100px; height:100px; padding:10px; border:7px solid #3399FF; margin:10px; border-radius:20px;  background:#FFFFFF}
		.table1 td div { margin-top:10px;}
		.table1 td input { width:100%;}
		
		.table2 td { width:100px; height:100px; padding:10px; border:7px solid #3399FF; margin:10px; border-radius:20px;   background:#FFFFFF; position:relative;}
		.red { background:red}
		.orange { background:orange}
		.blue { background:blue;}
		.green { background: #00CC00}
		
		.table2 td.redBorder { border-color:red;}
		.table2 td.orangeBorder { border-color:orange;}
		.table2 td.blueBorder { border-color:blue;}
		.table2 td.greenBorder { border-color:#00CC00;}
		
		.setPosRel { position:relative; color:#000000; display:block; clear:both;}
		.PointNumber { position:absolute; top:10px; right:10px; font-weight:bold; font-size:15px;}
		.Special { position:absolute; top:-12px; left:-12px; border-radius:20px; border:3px solid #FFFFFF;  color:#FFFFFF; padding:4px; font-size:14px; font-weight:bold;}
		.number { font-size:55px; text-transform:uppercase}
	</style>
	
	<script src="public/js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="public/js/bootstrap.js" type="text/javascript"></script>
	<script src="public/js/script.js" type="text/javascript"></script>
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script type="text/javascript">/*
		console.log("hiiiiiiiiiiiiii");

			$('#showGame').click(function(){
			$('#backpanel').hide();
			$('#frontpanel').show();	

			console.log("hellloo "+$('#Letter_1').val());		
		});
*/
	</script>
</head>
<body>
	<!-- wrapper start -->
	<div class="container ">
		<!-- back panel -->
		<div id="backpanel" style="margin-bottom:50px; margin:0px auto; display:block">
			
			<table class="table1" border="0" cellspacing="10" cellpadding="10" align="center">
				<tr>
					<td>
						<div align="center">
							Letter 
							<select id="Letter_1" name="selectLetter">
								<?php echo $letters = getLetters();?>
							</select>
							Points <select id="Points_1" name="selectPoints">
								<?php echo getPoints(); ?>
							</select>
							Rewards 
							<select id="Rewards_1" name="selectRewards">
								<?php echo getRewards(); ?>
							</select>
						</div>
					</td>
					<td>
						<div align="center">
							Letter 
							<select id="Letter_2" name="selectLetter">
								<?php echo $letters = getLetters();?>
							</select>
							Points <select id="Points_2" name="selectPoints">
								<?php echo getPoints(); ?>
							</select>
							Rewards 
							<select id="Rewards_2" name="selectRewards">
								<?php echo getRewards(); ?>
							</select>
						</div>
					</td>
					<td>
						Letter 
							<select id="Letter_3" name="selectLetter">
								<?php echo $letters = getLetters();?>
							</select>
							Points <select id="Points_3" name="selectPoints">
								<?php echo getPoints(); ?>
							</select>
							Rewards 
							<select id="Rewards_3" name="selectRewards">
								<?php echo getRewards(); ?>
							</select>
					</td>
					<td>
						Letter 
							<select id="Letter_4" name="selectLetter">
								<?php echo $letters = getLetters();?>
							</select>
							Points <select id="Points_4" name="selectPoints">
								<?php echo getPoints(); ?>
							</select>
							Rewards 
							<select id="Rewards_4" name="selectRewards">
								<?php echo getRewards(); ?>
							</select>
					</td>
				</tr>
				<tr>
					<td>
						Letter 
							<select id="Letter_5" name="selectLetter">
								<?php echo $letters = getLetters();?>
							</select>
							Points <select id="Points_5" name="selectPoints">
								<?php echo getPoints(); ?>
							</select>
							Rewards 
							<select id="Rewards_5" name="selectRewards">
								<?php echo getRewards(); ?>
							</select>
					</td>
					<td>
						Letter 
							<select id="Letter_6" name="selectLetter">
								<?php echo $letters = getLetters();?>
							</select>
							Points <select id="Points_6" name="selectPoints">
								<?php echo getPoints(); ?>
							</select>
							Rewards 
							<select id="Rewards_6" name="selectRewards">
								<?php echo getRewards(); ?>
							</select>
					</td>
					<td>
						Letter 
							<select id="Letter_7" name="selectLetter">
								<?php echo $letters = getLetters();?>
							</select>
							Points <select id="Points_7" name="selectPoints">
								<?php echo getPoints(); ?>
							</select>
							Rewards 
							<select id="Rewards_7" name="selectRewards">
								<?php echo getRewards(); ?>
							</select>
					</td>
					<td>
						Letter 
							<select id="Letter_8" name="selectLetter">
								<?php echo $letters = getLetters();?>
							</select>
							Points <select id="Points_8" name="selectPoints">
								<?php echo getPoints(); ?>
							</select>
							Rewards 
							<select id="Rewards_8" name="selectRewards">
								<?php echo getRewards(); ?>
							</select>
					</td>
				</tr>
				<tr>
					<td>
						Letter 
							<select id="Letter_9" name="selectLetter">
								<?php echo $letters = getLetters();?>
							</select>
							Points <select id="Points_9" name="selectPoints">
								<?php echo getPoints(); ?>
							</select>
							Rewards 
							<select id="Rewards_9" name="selectRewards">
								<?php echo getRewards(); ?>
							</select>
					</td>
					<td>
						Letter 
							<select id="Letter_10" name="selectLetter">
								<?php echo $letters = getLetters();?>
							</select>
							Points <select id="Points_10" name="selectPoints">
								<?php echo getPoints(); ?>
							</select>
							Rewards 
							<select id="Rewards_10" name="selectRewards">
								<?php echo getRewards(); ?>
							</select>
					</td>
					<td>
						Letter 
							<select id="Letter_11" name="selectLetter">
								<?php echo $letters = getLetters();?>
							</select>
							Points <select id="Points_11" name="selectPoints">
								<?php echo getPoints(); ?>
							</select>
							Rewards 
							<select id="Rewards_11" name="selectRewards">
								<?php echo getRewards(); ?>
							</select>
					</td>
					<td>
						Letter 
							<select id="Letter_12" name="selectLetter">
								<?php echo $letters = getLetters();?>
							</select>
							Points <select id="Points_12" name="selectPoints">
								<?php echo getPoints(); ?>
							</select>
							Rewards 
							<select id="Rewards_12" name="selectRewards">
								<?php echo getRewards(); ?>
							</select>
					</td>
				</tr>
				<tr>
					<td>
						Letter 
							<select id="Letter_13" name="selectLetter">
								<?php echo $letters = getLetters();?>
							</select>
							Points <select id="Points_13" name="selectPoints">
								<?php echo getPoints(); ?>
							</select>
							Rewards 
							<select id="Rewards_13" name="selectRewards">
								<?php echo getRewards(); ?>
							</select>
					</td>
					<td>
						Letter 
							<select id="Letter_14" name="selectLetter">
								<?php echo $letters = getLetters();?>
							</select>
							Points <select id="Points_14" name="selectPoints">
								<?php echo getPoints(); ?>
							</select>
							Rewards 
							<select id="Rewards_14" name="selectRewards">
								<?php echo getRewards(); ?>
							</select>
					</td>
					<td>
						Letter 
							<select id="Letter_15" name="selectLetter">
								<?php echo $letters = getLetters();?>
							</select>
							Points <select id="Points_15" name="selectPoints">
								<?php echo getPoints(); ?>
							</select>
							Rewards 
							<select id="Rewards_15" name="selectRewards">
								<?php echo getRewards(); ?>
							</select>
					</td>
					<td>
						Letter 
							<select id="Letter_16" name="selectLetter">
								<?php echo $letters = getLetters();?>
							</select>
							Points <select id="Points_16" name="selectPoints">
								<?php echo getPoints(); ?>
							</select>
							Rewards 
							<select id="Rewards_16" name="selectRewards">
								<?php echo getRewards(); ?>
							</select>
					</td>
				</tr>
			</table>
			<div style="" align="center"><input id="showGame"  type="button" value="Show Game" style="font-size:18px; color:#000000; padding:10px 15px; "></div>
		</div>
		
		<!-- front panel -->
		<div id="frontpanel" style="margin:0px auto; display:none" >
			<table class="table2" border="0" cellspacing="10" cellpadding="10" align="center">
				<tr>
					<!--<td align="center" valign="middle" class="orangeBorder" >	-->	
					<td align="center" valign="middle">				
							<div id="f_Points_1"  class="PointNumber">1</div>
							<div id="f_Rewards_1" class="Special" style="display:none">DW</div>
							<strong id="f_Letter_1" class="number"></strong>
					</td>
					<td align="center" valign="middle" >						
							<div id="f_Points_2"  class="PointNumber">1</div>
							<div id="f_Rewards_2" class="Special" style="display:none">DW</div>
							<strong id="f_Letter_2" class="number">z</strong>
					</td>
					<td align="center" valign="middle" >						
							<div id="f_Points_3"  class="PointNumber">2</div>
							<div id="f_Rewards_3" class="Special" style="display:none">DW</div>
							<strong id="f_Letter_3" class="number">e</strong>
					</td>
					<td align="center" valign="middle" >						
							<div id="f_Points_4"  class="PointNumber">1</div>
							<div id="f_Rewards_4" class="Special" style="display:none">DW</div>
							<strong id="f_Letter_4" class="number">g</strong>
					</td>
				</tr>
				<tr>
					<td align="center" valign="middle" >						
							<div id="f_Points_5" class="PointNumber">3</div>
							<div id="f_Rewards_5" class="Special" style="display:none">DW</div>
							<strong id="f_Letter_5" class="number">h</strong>
					</td>
					<td align="center" valign="middle" >						
							<div id="f_Points_6" class="PointNumber">1</div>
							<div id="f_Rewards_6" class="Special" style="display:none">DW</div>
							<strong id="f_Letter_6" class="number">j</strong>
					</td>
					<!--<td align="center" valign="middle" class="greenBorder" >	-->
					<td align="center" valign="middle">					
							<div id="f_Points_7" id="f_Points_1" class="PointNumber">1</div>
							<div id="f_Rewards_7" class="Special" style="">DL</div>
							<strong id="f_Letter_7" class="number">o</strong>
					</td>
					<td align="center" valign="middle" >						
							<div id="f_Points_8" class="PointNumber">2</div>
							<div id="f_Rewards_8" class="Special" style="display:none">DW</div>
							<strong id="f_Letter_8" class="number">w</strong>
					</td>
				</tr>
				<tr>
					<td align="center" valign="middle" >						
							<div id="f_Points_9" class="PointNumber">1</div>
							<div id="f_Rewards_9" class="Special" style="display:none">DW</div>
							<strong id="f_Letter_9" class="number">v</strong>
					</td>
					<td align="center" valign="middle" >						
							<div id="f_Points_10" class="PointNumber">2</div>
							<div id="f_Rewards_10" class="Special" style="display:none">DW</div>
							<strong id="f_Letter_10" class="number">b</strong>
					</td>
					<td align="center" valign="middle" >						
							<div id="f_Points_11" class="PointNumber">1</div>
							<div id="f_Rewards_11" class="Special" style="display:none">DW</div>
							<strong id="f_Letter_11" class="number">m</strong>
					</td>
					<td align="center" valign="middle" >						
							<div id="f_Points_12" class="PointNumber">1</div>
							<div id="f_Rewards_12" class="Special" style="display:none">DW</div>
							<strong id="f_Letter_12" class="number">m</strong>
					</td>
				</tr>
				<tr>
					<td align="center" valign="middle" >						
							<div id="f_Points_13" class="PointNumber">1</div>
							<div id="f_Rewards_13" class="Special" style="display:none">DW</div>
							<strong id="f_Letter_13" class="number">i</strong>
					</td>
					<!--<td align="center" valign="middle" class="blueBorder" >		-->
					<td align="center" valign="middle">				
							<div id="f_Points_14" class="PointNumber">2</div>
							<div id="f_Rewards_14" class="Special blue" style="">TL</div>
							<strong id="f_Letter_14" class="number">f</strong>
					</td>
					<td align="center" valign="middle" >						
							<div id="f_Points_15" class="PointNumber">1</div>
							<div id="f_Rewards_15" class="Special" style="display:none">DW</div>
							<strong id="f_Letter_15" class="number">k</strong>
					</td>
					<!--<td align="center" valign="middle" class="redBorder" >-->	
					<td align="center" valign="middle">						
							<div id="f_Points_16" class="PointNumber">4</div>
							<div id="f_Rewards_16" class="Special red" style="">TW</div>
							<strong id="f_Letter_16" class="number">d</strong>
					</td>
				</tr>
			</table>
			<div style="" align="center"><input id="showSetting"  type="button" value="Create Words" style="font-size:18px; color:#000000; padding:10px 15px; "></div>
		</div>
		<!-- front panel ends -->


		<!-- front panel -->
		<div id="ouputpanel" style="margin:0px auto; display:none" >
				Final Output 
		</div>



</div>
<!-- wrapper close -->
</body>
</html>