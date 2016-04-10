

<?php


if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])){

   header("location:index.php");
}
include 'config.php';
?>



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

				$username="";
			

		  if(isset($_SESSION['username'])) {
				    $username = $_SESSION['username'] ;
}

 ?>


<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script	src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"><link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="./js1/js.js"></script>
<link rel="stylesheet" href="css1/style.css">
<link rel="stylesheet" href="css1/seniors.css">
<script	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Raleway:200,400,800' rel='stylesheet' type='text/css'>
</head>
<style>
.nullify{
	background: none !important;
	border: none !important;
	margin: 0 !important;
	width: auto !important;
}
</style>


<body>
<div class="container-fluid FFEBCD">
	<nav class="navbar navbar-inverse nav">
		<a href="#" id="profileID"><img class="profileTop" src="images/dummy.png"></a>
	</nav>
	<div id="myDropdown" class="dropdown-content">
	    <a href="profile.php">My Profile</a>
	    <a href="logout.php">Log Out</a>
	 </div>
	<div class="container">
		<div class="profileContent">
			<span><img class="imageProfile profile" src="images/casino-online.jpg">	</span>
			<?php 
			$name ="";

			$resultx = $mysqli->query("select first_name as name from User where username='".$username."'");
			if($resultx){
  				while($obj = $resultx->fetch_object()){
   				 $name = $obj->name;

			echo '<span class="profileName">'.$name.'</span>';
		}}
			?>
			<!-- TODO Fetch from DB --><br /><br /><br />



<form class="nullify" action="profile.php" method="POST" >
<span class="courseAdd">Please add your courses:&nbsp;&nbsp;&nbsp;</span>
			

		
			
					<span class="course">
						<input class="courseInput" style="display: inline" type="text" placeholder="Course Code" name="course_id" tabindex="1"/> </span>
						<button style="width:75px;" type="submit" class="button" name="add" value="add">Add</button>
				</form>
				
			
		<div class="row courseAdd">
	        <div class="panel panel-primary filterable">
	            <div class="panel-heading">
	                <h3 class="panel-title">Registered Courses</h3>
	            </div>
	            <table class="table">
	                <thead>
	                    <tr class="filters">
	                        <th>Subject Code</th>
	                        <th>Subject Name</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    <tr>
	                    <td>INFM700</td>
	                    	<td>Information Architecture</td>
	                    	</tr>
	                    	<tr>
	                    		<td>INFM747</td>
	                    		<td>Web Enabled Databases</td>
	                       
	            <?php

if (isset($_POST['add'])) 
                { 
                    $coid = $_POST['course_id'];
                    $name = $_SESSION['username'];
                   //$od=$od-1;
                   //echo $od;
                   //echo "order will be deleted";
                    //echo "submitted";
                    //echo $coid;
                   $mysqli->query("update `user_academia` set ".$coid."=1 where user_name='".$name."'");
                   //echo "reached";
                 // echo "submit";
                   $courses = array();
                   //
                   echo '<script>window.location.reload()</script>';
                   //$res = $mysqli->query("Select `INST706`, `INFM700`, `INFM750`, `INFM714`, `INST737`, `INST747`, `INFM757`, `INFM733`, `INFM743`, `INFM603` from user_academia where user_name='".$name."'");

					
					//values
					$result5 = $mysqli->query("select course_id,description from course where course_id in ('INST706','INFM700','INFM747')");

					    							while($obj = $result5->fetch_object()){

					    								 echo '<td>'.$obj->course_id.'</td>';
						                        		 echo  '<td>'.$obj->description.'</td>';
						                        	


					    							}


                   while($obj = $res->fetch_object()){


    						if($obj->INST706 === 1) {

    							//$courses = "INST706";

    							$result4 = $mysqli->query("select course_id,description from course where course_id = 'INST706'");

    							while($obj = $result4->fetch_object()){

    								 echo '<td>'.$obj->course_id.'</td>';
	                        		echo  '<td>'.$obj->description.'</td>';


    							}

    						}
    						if($obj->INFM700 === 1) {
    							$courses = "INFM700";
    						}
    						if($obj->INFM750 === 1) {
    							$courses = "INFM750";
    						}
    						if($obj->INFM714 === 1) {
    							$courses = "INFM714";
    						}
    						if($obj->INST737 === 1) {
    							$courses = "INST737";
    						}
    						if($obj->INST747 === 1) {
    							$courses = "INST747";
    						}
    						if($obj->INFM757 === 1) {
    							$courses = "INFM757";
    						}
    						if($obj->INST733 === 1) {
    							$courses = "INST733";
    						}
    						if($obj->INFM743 === 1) {
    							$courses = "INFM743";
    						}
    						if($obj->INFM603 === 1) {
    							$courses = "INFM603";
							}

           			 } 

           			 echo $courses;
           			}

            ?>

</tr>
	                </tbody>
	            </table>
	        </div>
	  	</div> 
		</div>
	</div>

</div>

</body>
</html>