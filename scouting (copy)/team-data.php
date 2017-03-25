<?php include("includes/connection.php"); ?>
<?php
$sql = "SELECT * FROM scoutingData WHERE teamNumber='{$_GET[t1]}'";
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
        echo "<div class='panel panel-default'>";
		echo "<div class='panel-heading'>";
		echo "Team # :";
        echo $row['teamNumber'];
		echo "<br/>";
		echo "Match # :";
        echo $row['matchNumber'];
		echo "</div>";
		echo "<div class='panel-body'>";
		echo "<div class='panel panel-default'>";
		echo "<div class='panel-body'>";
		echo "<h4>Autonomous</h2>";
		echo "Gear Success :";
        echo $row['aGearSuccess']."<br>";
        echo "Low Fuel :";
        echo $row['aLowFuel']."<br>";
		echo "High Fuel :";
        echo $row['aHighFuel']."<br>";
		echo "</div>";
		echo "</div>";
		echo "<div class='panel panel-default'>";
		echo "<div class='panel-body'>";
		echo "<h4>Tele</h4>";
		echo "Gears:";
        echo $row['tGearNumber']."<br>";
		echo "Low Fuel:";
        echo $row['tLowFuel']."<br>";
		echo "High Fuel:";
        echo $row['tHighFuel']."<br>";
		echo "</div>";
		echo "</div>";
		echo "<div class='panel panel-default'>";
		echo "<div class='panel-body'>";
		echo "Climb Success :";
        echo $row['ClimbSuccess']."<br>";
echo "Climb Time :";
        echo $row['climbTime']."<br>";

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
