<html>
<head>
	<meta charset='utf-8'>
	<title>Forms</title>
	<style>
		body{
			font-family: Helvetica;
		}
		.container{
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;			
		}
		tr,td,th{
			padding:20px;
		}
	</style>
</head>
<body style="background-color:#3DCCCC;">

	<?php
		$cost=$hours=0;
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			if(strtotime($_POST["indate"]) && strtotime($_POST["outdate"]) ) {
		
				$indate= DateTime::createFromFormat('d-m-y H:i:s',$_POST["indate"].' '.$_POST["intime"]);
				$outdate= DateTime::createFromFormat('d-m-y H:i:s',$_POST["outdate"].' '.$_POST["outtime"]);
				
				$diff_date= $indate->diff($outdate);
				$hours = $diff_date->h + ($diff_date->d)*24 + ($diff_date->m)*30*24 + ($diff_date->y)*12*30*24;

				if($hours){
					$hrs=$hours;
					$cost=0;
					
					while($hrs!=0){
					switch($_POST['vtype']){
						case 'car':
							if($hrs<=1) $cost=30;
							else if($hrs<=3) $cost=60+$cost;
							else if($hrs<=6) $cost=100+$cost;
							else if($hrs<=12) $cost=150+$cost;
							else if($hrs<=24) $cost=250+$cost;
							if($hrs>24){
								$cost=$cost+250;
								$hrs-=24;
							}
							else $hrs=0;
							break;
						case 'twowheeler':
							if($hours<=1) $cost=10;
							else if($hrs<=3) $cost=35+$cost;
							else if($hrs<=6) $cost=60+$cost;
							else if($hrs<=12) $cost=90+$cost;
							else if($hrs<=24) $cost=150+$cost;
							if($hrs>24){
								$cost=$cost+250;
								$hrs-=24;
							}
							else $hrs=0;
							break;
					}
				}
				}
			}
			else echo "<h2>Invalid Date</h2>";
		}
	?>

	<h2 align=center>Invoice</h2>

	<div class="container">
		<table border="1">
			<tr>
				<th>Fields</th>
				<th>Value</th>
			</tr>
				<td>Type</td>
				<td><?= $_POST["vtype"] ?></td>
			<tr>
				<td>Vehicle Id</td>
				<td><?= $_POST["cid"] ?></td>
			</tr>
			<tr>
				<td>In-Time</td>
				<td><?= $_POST["indate"]." ".$_POST["intime"] ?></td>
			</tr>
			<tr>
				<td>Out-Time</td>
				<td><?= $_POST["outdate"]." ".$_POST["outtime"] ?></td>
			</tr>
			<tr>
				<td>Total time (hrs)</td>
				<td><?= $hours ?></td>
			</tr>
			<tr>
				<td>Total Cost</td>
				<td><?=$cost ?></td>
			</tr>
		</table>
	</div>
</body>
</html>