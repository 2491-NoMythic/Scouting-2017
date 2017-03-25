<?php include("includes/connection.php"); ?>
<?php
$sqlq = "SELECT * FROM team";  
?>
<?php
if(isset($_POST['submit'])){
$sql = "INSERT INTO scoutingData (teamNumber, matchNumber, aGearSuccess, aLowFuel, aHighFuel,tGearNumber,tLowFuel, tHighFuel, ClimbSuccess, climbTime, Comments )
VALUES ('$_POST[teamNumber]', '$_POST[matchNumber]', '$_POST[aGearSuccess]', '$_POST[aLowFuel]', '$_POST[aHighFuel]','$_POST[tGearNumber]','$_POST[tLowFuel]', '$_POST[tHighFuel]', '$_POST[ClimbSuccess]', '$_POST[climbTime]', '$_POST[Comments]' )";
header("Location: scouting-data-success.php");
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Scouting</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
  <link rel="stylesheet" href="chosen-files/style.css">
  <link rel="stylesheet" href="chosen-files/prism.css">
  <link rel="stylesheet" href="chosen-files/chosen.css">
</head>
<body>
<?php include("includes/navbar.php"); ?>
<div class="container col-xs-9">
   <div class="col-xs-9">
<h2>Scouting</h2>
<form  method="post" class="col-2" action="">
								
		
		<div class="panel panel-default">
		<div class="panel-body">
		<div class="form-group">	 
		<label class="=col-form-label">Team Number</label>
		<div>
		<?php
	$result = mysqli_query($conn, $sqlq);
    if (mysqli_num_rows($result) > 0) 
    {
	echo "<select name='teamNumber' data-placeholder='Choose a team...' class='chosen-select'  id='teamNumber'   tabindex='1' style='width:150px !important'>";	
    while($row = mysqli_fetch_assoc($result)) 
    {
        echo '<option value="';
		echo $row['teamNumber'];
		echo '">';
		echo $row['teamNumber'].'';
		echo '</option>';
		
    }
		echo "</select>";
 
    }?></div>
		
			</div>
			<div class="form-group">
	
	
		<label class="col-2 col-form-label">Match Number </label>
		
			<input id="matchNumber" name="matchNumber"type="text" maxlength="255" value="0" class="form-control"/> 
			</div>
	</div>
	</div>
		<div class="panel panel-default">
		<div class="panel-body">
			<div class="form-group">
		
		<label class="col-form-label">A Gear Success </label>
		
			<input id="aGearSuccess" name="aGearSuccess" type="checkbox" value="1" class="form-check-input" />

</div><div class="form-group">
	
	
		<label class="col-2 col-form-label">A low fuel </label>
		
			<input id="aLowFuel" name="aLowFuel"type="text" maxlength="255" value="0" class="form-control"/> 
	
	</div><div class="form-group">
		<label class="col-2 col-form-label">A high fuel </label>
	
			<input id="aHighFuel" name="aHighFuel"type="text" maxlength="255" value="0" class="form-control"/> 
			</div>
		</div>
	</div>
		<div class="panel panel-default">
		<div class="panel-body">
		<div class="form-group">
		<label class="col-2 col-form-label">T gear # </label>
	
			<input id="tGearNumber" name="tGearNumber" type="text" maxlength="255" value="0" class="form-control"/> 
	</div><div class="form-group">
		<label class="col-2 col-form-label">T high fuel </label>
	
			<input id="tHighFuel" name="tHighFuel" type="text" maxlength="255" value="0" class="form-control"/> 
	</div><div class="form-group">
		<label class="col-2 col-form-label">T low fuel </label>
	
			<input id="tLowFuel" name="tLowFuel" type="text" maxlength="255" value="0" class="form-control"/> 
	</div><div class="form-group">
		<label class="col-2 col-form-label">Climb Success </label>
	
			<input id="ClimbSuccess" name="ClimbSuccess" type="checkbox" value="1" class="form-check-input"/>
</div>
<div class="form-group">
		<label class="col-2 col-form-label">Climb Time </label>
	
			<input id="climbTime" name="climbTime" type="text" maxlength="255" value="0" class="form-control"/> 
	</div>
<div class="form-group">
		<label class="col-2 col-form-label">Comments </label>
		
			<textarea id="Comments" name="Comments" value="None" class="form-control"></textarea> 
			</div>
			
			    <input type="hidden" name="form_id" value="1" />
			    
				<input id="saveForm" type="submit" name="submit" class="btn btn-primary" value="Submit" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
  <script src="chosen-files/chosen.jquery.js" type="text/javascript"></script>
  <script src="chosen-files/prism.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>	
</form>
</div>
</div>
	
</body>
</html>
