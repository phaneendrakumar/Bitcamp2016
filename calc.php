<!DOCTYPE html>
<html lang="en">


<?php
 			// LOGIN TO DATABASE SCRIPT WRITTEN FOR MYSQLI
			$connection = mysql_connect('localhost', 'root', '');
				if (!$connection){
				    die("Database Connection Failed" . mysql_error());
				}
				$select_db = mysql_select_db('uConnect');
				if (!$select_db){
				    die("Database Selection Failed" . mysql_error());
				}
 ?>

<head>
  <title>Course Selection</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>





<?php
  $sql="SELECT SUM(`INST 706`) AS INST706,SUM(`INFM 700`) AS INFM700, SUM(`INFM 750`) AS INFM750,SUM(`INFM 714`) AS INFM714 , SUM(`INST 737`) AS INST737,SUM(`INFM 757`) AS INFM757,SUM(`INFM 733`) AS INFM733, SUM( `INFM 743`) AS INFM743, SUM(`INFM 603`) AS INFM603 
     FROM user_academia";
  $query = mysql_query($sql);
 
    // output data of each row
    $course=array();
    while($row = mysql_fetch_assoc($query)){

  // add each row returned into an array
  $course[] = $row;
  // OR just echo the data:
  

}
arsort($course);

foreach ($val as $course) {
    echo "$val[$course] \n";
}

print_r($course);

?>



</body>
</html>

