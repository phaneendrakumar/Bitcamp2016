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
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900'
	rel='stylesheet' type='text/css'>


 

</head>
<body class="courseBody">
<div class="container-fluid FFEBCD">
	<nav class="navbar navbar-inverse nav">
		<a href="#" id="profileID"><img class="profile" src="images/casino-online.jpg"></a>
	</nav>

<?php

  $query1="SELECT * FROM roles";
			    $result1 = mysql_query($query1) or die(mysql_error());
			    ?>
			    


    

	<div id="myDropdown" class="dropdown-content">
	    <a href="profile.php">My Profile</a>
	    <a href="logout.php">Log Out</a>
	 </div>
	<div class="container">
		<div class="back" onclick="goBack();">Back</div>
	<form class="form" action="courses.php" method="POST" > <!-- TODO php validation -->
	  <div class="col-2">
	    <label>
	      Role
	      <select id="role" name="role" tabindex="1">
	      	                
				 <?php
			        while ($select_query_array= mysql_fetch_array($result1) )
						{

						   echo '<option value="'.$select_query_array["role_name"].'">'.htmlspecialchars($select_query_array["role_name"]).'</option>';


						}
			        ?>
	      </select>
	     </label>
	  </div>
	  
	  <div class="col-2">
	    <label>
	      Yrs Experience
	      <input placeholder="How many years of experience?" id="experience" name="experience" tabindex="7">
	    </label>
	  </div>
	  	  
	  <div class="col-submit">
	    <button type="submit" name="go">Plan</button>
	  </div>
	  
	  </form>	




	<?php

	$role="";
	$experience =0;
	$company ="";

	if (isset($_POST['go'])){

		$company = $_POST['company'];
$experience = $_POST['experience'];
$role = $_POST['role'];


}

?>

<center>	<div class="resultshead">Results:</div> </center>
	  	<div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Course Plan</h3>
            </div>
            <table class="table">
                <thead>
                <b>    <tr class="filters">
                  
                        <th>COURSE ID</th>
                        <th>COURSE NAME</th>
                        

                    </tr> </b>
                    <tr>
	                    <td>INFM700</td>
	                    	<td>Information Architecture</td>
	                    	</tr>
	                    	<tr>
	                    		<td>INFM747</td>
	                    		<td>Web Enabled Databases</td>
	                    	</tr>
                </thead>
                <tbody>



                	<?php



		$sql = "SELECT u.first_name as fname,u.last_name as lname,u.email_id as email_id,a.experience as exp,a.company as company from User u,user_academia a where  u.username=a.user_name and username in (Select user_name from user_academia where role='".$role."' and (experience = '".$experience."' or company = '".$company."'))";
            


         $result2 = $mysqli->query($sql);
         
         if($result2 === FALSE){
            die(mysql_error());
            echo "i am dying";
          }

          

          if($result2){

            while($obj = $result2->fetch_object()) { 

            	$fname = $obj->fname;
            	$lname = $obj->lname;
            	$exp = $obj->exp;
            	$email = $obj->email_id;
            	$company = $obj->company;
            	?>







<!-- <section id="results" class="results"> -->








        <tr>
            <td>
                <!-- notice how I include php without echoing the whole table -->
                <?php echo $fname; ?>
                
            </td>
            <td>
            	<?php echo $lname; ?>
            </td>
            <td>
            	<?php echo $email; ?>
            </td>
            <td>
            	<?php echo $company; ?>
            </td>
            <td>
            	<?php echo $exp; ?>
            </td>
         
        </tr>
 




         


<?php
     //echo '<p><h3>'.$obj->company.'</h3></p>';
              //echo '<p><h3>'.$obj->experience.'</h3></p>';
              //echo '<p><h3>'.$obj->role.'</h3></p>';
             

}
}

?>
   </tbody>
</table>
</div>
</div>
<!-- </section> -->


	
	
</div>	


<script>
function goBack() {
    window.history.back();
}
</script>

</body>
</html>





