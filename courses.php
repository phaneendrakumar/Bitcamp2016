<?php


if(session_id() == '' || !isset($_SESSION)){session_start();}

//if(isset($_SESSION["username"])){

  //   header("location:index.php");
//}
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


 <style type="text/css">

   table.mytable {
            border: 10px ;
        }

        
        table.mytable > thead > tr > th {
            font-size: 2em;

            ont-family: "Trebuchet MS", Arial, Verdana;
  font-size: 14px;
  padding: 5px;
  border-bottom-width: 1px;
  border-bottom-style: solid;
  border-bottom-color: white;
  background-color: white;
  color: black;

        }
        table.mytable > tbody > tr > td {
        	font-size: 2em;
            color: #999;
            padding: 5px;
            margin-top: 10px;
        }
    </style>


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
	    <a href="#">My Profile</a>
	    <a href="#">Log Out</a>
	 </div>
	<div class="container">
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
	      Company
	      <input placeholder="Which company you are aspiring for?" id="company" name="company" tabindex="2">
	    </label>
	  </div>
	  
	  <div class="col-2">
	    <label>
	      Yrs Experience
	      <input placeholder="How many years of experience?" id="experience" name="experience" tabindex="7">
	    </label>
	  </div>
	  	  
	  <div class="col-submit">
	    <button type="submit" name="go">Submit</button>
	  </div>
	  
	  </form>	









	





	<?php

		$company = $_POST['company'];
$experience = $_POST['experience'];
$role = $_POST['role'];







		$sql = "SELECT * from User where username in (Select user_name from user_academia where role='".$role."' and (experience = '".$experience."' or company = '".$company."'))";
            
         $result2 = $mysqli->query($sql);
         
         if($result2 === FALSE){
            die(mysql_error());
            echo "i am dying";
          }

          

          if($result2){





            	?>


<center>
            	<table class="mytable" >
    <thead>
        <tr>
            <th>Name</th>
            <th>Email Id</th>
        </tr>
    </thead>
    <tbody>


    	<?php 
            while($obj = $result2->fetch_object()) { 

            	$name = $obj->username;
            	$email = $obj->email_id;
            	?>


        <tr>
            <td>
                <!-- notice how I include php without echoing the whole table -->
                <?php echo $name; ?>
                
            </td>
            <td>
            	<?php echo $email; ?>
            </td>
        </tr>
    </tbody>
</table>
</center>



         


<?php
     //echo '<p><h3>'.$obj->company.'</h3></p>';
              //echo '<p><h3>'.$obj->experience.'</h3></p>';
              //echo '<p><h3>'.$obj->role.'</h3></p>';
             

}
}

?>

</div>

	
	
</div>	
</body>
</html>





