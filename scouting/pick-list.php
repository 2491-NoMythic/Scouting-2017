<?php include("includes/connection.php"); ?>
<?php
$sql = "SELECT teamNumber, AVG(aGearSuccess), AVG(aLowFuel), MAX(aLowFuel),AVG(aHighFuel), MAX(aHighFuel), AVG(tGearNumber), MAX(tGearNumber),AVG(tLowFuel),MAX(tLowFuel),AVG(tHighFuel), MAX(tHighFuel),AVG(ClimbSuccess), AVG(climbTime) FROM scoutingData GROUP BY teamNumber";
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
<div class="container-fluid">
   <table class="table table-condensed table-responsive">
    <thead>
        <tr class="bg-primary">
            <th data-column-id="teamNumber">Team #</th>
            <th data-column-id="autonomous" colspan="5">Autonomous</th>
            <th data-column-id="tele" colspan="6">Tele</th>
            <th data-column-id="climb" colspan="2">Climb</th>
        </tr>
    </thead>
    <tbody>
          <tr>
            <td class="bg-info"><strong>Columns</strong></td>
			  <td><strong>Gear </br> Success</strong></td>
          	<td><strong>Average </br> Low Fuel</strong></td>
          	<td><strong>Max </br>Low Fuel</strong></td>
          	<td><strong>Average</br> High Fuel</strong></td>
			<td><strong>Max</br> High Fuel</strong></td>
          	<td class="bg-info"><strong>Average</br> Gears</strong></td>
          	<td class="bg-info"><strong>Max Gears</strong></td>
          	<td class="bg-info"><strong>Average</br> Low Fuel</strong></td>
          	<td class="bg-info"><strong>Max Low Fuel</strong></td>
          	<td class="bg-info"><strong>Average </br>High Fuel</strong></td>
          	<td class="bg-info"><strong>Max </br>High Fuel</strong></td>
          	<td><strong>Climb Success</strong></td>
			<td><strong>Climb Time</strong></td>
          	
          </tr>
           <?php 	
	$result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) 
    {
		
    while($row = mysqli_fetch_assoc($result)) 
    {
		echo "<tr>";
		echo "<td class='bg-info'>";
		echo "<a href='team-data.php?t1=";
		echo $row['teamNumber'];
		echo "'>";
        echo $row['teamNumber'];
		echo "</a>";
		echo "</td>";
		echo "<td>";
        echo number_format ($row ['AVG(aGearSuccess)'],2);
		echo "</td>";
		echo "<td>";
        echo number_format ($row['AVG(aLowFuel)'],2);
        echo "</td>";
		echo "<td>";
        echo number_format ($row['MAX(aLowFuel)']);
		echo "</td>";
		echo "<td>";
        echo number_format ($row['AVG(aHighFuel)'],2);
        echo "</td>";
		echo "<td>";
        echo number_format ($row['MAX(aHighFuel)']);
	echo "</td>";
		echo "<td class='bg-info'>";
        echo number_format ($row['AVG(tGearNumber)'],2);
		echo "</td>";
		echo "<td class='bg-info'>";
        echo number_format ($row['MAX(tGearNumber)']);
		echo "</td>";
		echo "<td class='bg-info'>";
        echo number_format ($row['AVG(tLowFuel)'],2);
        echo "</td>";
		echo "<td class='bg-info'>";
        echo number_format ($row['MAX(tLowFuel)']);
		echo "</td>";
		echo "<td class='bg-info'>";
        echo number_format ($row['AVG(tHighFuel)'],2);
       echo "</td>";
		echo "<td class='bg-info'>";
        echo number_format ($row['MAX(tHighFuel)']);
	echo "</td>";
		echo "<td>";
        echo number_format ($row['MAX(ClimbSuccess)']);
		echo "</td>";
		echo "<td>";
        echo number_format ($row['AVG(climbTime)'],2);
	echo "</td>";
		echo "</tr>";
    }
    mysqli_close($conn);
    }
	?>
    </tbody>
</table>
	</div>
</body>
</html>
