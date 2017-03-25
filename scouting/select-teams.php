<?php include("includes/connection.php"); ?>
<?php
$sql = "SELECT * FROM team";  
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create Reports</title>
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
  <h2>Select Teams</h2>	
<form method="get" class="col-2" action="results.php">
								
		
<div class="panel panel-default">
<div class="panel-body">
	<div class="form-group">	 
		<label class="=col-form-label">Team One</label>
		<div>
<?php
	$result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) 
    {
	echo "<select name='t1' data-placeholder='Choose a team...' class='chosen-select' id='teamNumber1'   tabindex='1' style='width:150px !important'><option value='0000'>0000</option>";	
    while($row = mysqli_fetch_assoc($result)) 
    {
        echo '<option value="';
		echo $row['teamNumber'];
		echo '">';
		echo $row['teamNumber'].'';
		echo '</option>';
		
    }
		echo "</select>";
 
    }
	?></div>
		  </div>	
	<div class="form-group">	 
		<label class="=col-form-label">Team Two</label>
		<div><?php
	$result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) 
    {
	echo "<select name='t2' data-placeholder='Choose a team...' class='chosen-select' id='teamNumber2'   tabindex='2' style='width:150px !important'><option value='0000'>0000</option>";	
    while($row = mysqli_fetch_assoc($result)) 
    {
        echo '<option value="';
		echo $row['teamNumber'];
		echo '">';
		echo $row['teamNumber'].'';
		echo '</option>';
		
    }
		echo "</select>";
 
    }
	?></div>
	</div>
<div class="form-group">	 
		<label class="=col-form-label">Team Three</label>
		<div><?php
	$result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) 
    {
	echo "<select name='t3' data-placeholder='Choose a team...' class='chosen-select' id='teamNumber3'   tabindex='3' style='width:150px !important'><option value='0000'>0000</option>";	
    while($row = mysqli_fetch_assoc($result)) 
    {
        echo '<option value="';
		echo $row['teamNumber'];
		echo '">';
		echo $row['teamNumber'].'';
		echo '</option>';
		
    }
		echo "</select>";
 
    }
	?></div>
</div>
<div class="form-group">	 
		<label class="=col-form-label">Team Four</label>
		
			<div><?php
	$result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) 
    {
	echo "<select name='t4' data-placeholder='Choose a team...' class='chosen-select' id='teamNumber4'   tabindex='4' style='width:150px !important'><option value='0000'>0000</option>";	
    while($row = mysqli_fetch_assoc($result)) 
    {
        echo '<option value="';
		echo $row['teamNumber'];
		echo '">';
		echo $row['teamNumber'].'';
		echo '</option>';
		
    }
		echo "</select>";
 
    }
	?> </div>
  </div>

<div class="form-group">	 
		<label class="=col-form-label">Team Five</label>
		<div><?php
	$result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) 
    {
	echo "<select name='t5' data-placeholder='Choose a team...' class='chosen-select' id='teamNumber5'   tabindex='1' style='width:150px !important'><option value='0000'>0000</option>";	
    while($row = mysqli_fetch_assoc($result)) 
    {
        echo '<option value="';
		echo $row['teamNumber'];
		echo '">';
		echo $row['teamNumber'].'';
		echo '</option>';
		
    }
		echo "</select>";
 
    }
			?></div>
</div>

<div class="form-group">	 
		<label class="=col-form-label">Team Six</label>
		<div><?php
	$result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) 
    {
	echo "<select name='t6' data-placeholder='Choose a team...' class='chosen-select' id='teamNumber6'   tabindex='1' style='width:150px !important'><option value='0000'>0000</option>";	
    while($row = mysqli_fetch_assoc($result)) 
    {
        echo '<option value="';
		echo $row['teamNumber'];
		echo '">';
		echo $row['teamNumber'].'';
		echo '</option>';
		
    }
		echo "</select>";
 
    }
	?></div>
</div>
			<input id="Submit" type="submit" name="submit" class="btn btn-primary" value="Submit" />
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
