<?php include("includes/connection.php"); ?>
<?php
$sql = "SELECT teamNumber, AVG(aGearSuccess), AVG(aLowFuel), MAX(aLowFuel),AVG(aHighFuel), MAX(aHighFuel), AVG(tGearNumber), MAX(tGearNumber),AVG(tLowFuel),MAX(tLowFuel),AVG(tHighFuel), MAX(tHighFuel),AVG(ClimbSuccess), AVG(climbTime) FROM scoutingData WHERE teamNumber='{$_GET[t1]}' OR teamNumber='{$_GET[t2]}' OR teamNumber='{$_GET[t3]}' OR teamNumber='{$_GET[t4]}' OR teamNumber='{$_GET[t5]}' OR teamNumber=' {$_GET[t6]}' GROUP BY teamNumber";
    ?> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Results</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<?php include("includes/navbar.php"); ?>
<div class="container col-xs-9">
   <div class="col-xs-9">
<?php 	
	$result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) 
    {
		
    while($row = mysqli_fetch_assoc($result)) 
    {
        echo "<div class='panel panel-default' style='float:left; margin-left:10px;'>";
		echo "<div class='panel-heading'>";
		echo "Team # :";
		echo "<a href='team-data.php?t1=";
		echo $row['teamNumber'];
		echo "'>";
        echo $row['teamNumber'];
		echo "</a>";
		echo "</div>";
		echo "<div class='panel-body'>";
		echo "<div class='panel panel-default'>";
		echo "<div class='panel-body'>";
		echo "<h4>Autonomous</h2>";
		echo "Gear Success :";
        echo number_format ($row['AVG(aGearSuccess)'],2)."<br>";
		echo "Avg Low Fuel :";
        echo number_format ($row['AVG(aLowFuel)'],2)."<br>";
        echo "Max Low Fuel :";
        echo number_format ($row['MAX(aLowFuel)'])."<br>";
		echo "Avg High Fuel :";
        echo number_format ($row['AVG(aHighFuel)'],2)."<br>";
        echo "Max High Fuel :";
        echo number_format ($row['MAX(aHighFuel)'])."<br>";
		echo "</div>";
		echo "</div>";
		echo "<div class='panel panel-default'>";
		echo "<div class='panel-body'>";
		echo "<h4>Tele</h4>";
		echo "Avg Gears:";
        echo number_format ($row['AVG(tGearNumber)'],2)."<br>";
		echo "Max Gears:";
        echo number_format ($row['MAX(tGearNumber)'])."<br>";
		echo "Avg Low Fuel:";
        echo number_format ($row['AVG(tLowFuel)'],2)."<br>";
        echo "Max Low Fuel :";
        echo number_format ($row['MAX(tLowFuel)'])."<br>";
		echo "Avg High Fuel:";
        echo number_format ($row['AVG(tHighFuel)'],2)."<br>";
        echo "Max High Fuel:";
        echo number_format ($row['MAX(tHighFuel)'])."<br>";
		echo "</div>";
		echo "</div>";
		echo "<div class='panel panel-default'>";
		echo "<div class='panel-body'>";
		echo "Climb Success :";
        echo number_format ($row['AVG(ClimbSuccess)'],2)."<br>";
echo "Climb Time :";
        echo number_format ($row['AVG(climbTime)'],2)."<br>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "<div class='panel-footer'>";
		echo "</div>";
		echo "</div>";
    }
    mysqli_close($conn);
    }
	?>
</div>
	</div>
</body>
</html>

