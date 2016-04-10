<?php


if(session_id() == '' || !isset($_SESSION)){session_start();
$name = $_SESSION['username'];}


      $connection = mysql_connect('localhost', 'root', '');
        if (!$connection){
            die("Database Connection Failed" . mysql_error());
        }
        $select_db = mysql_select_db('uConnect');
        if (!$select_db){
            die("Database Selection Failed" . mysql_error());
        }

//if(isset($_SESSION["username"])){

  //   header("location:index.php");
//}
include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
 <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"><link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="./js1/js.js"></script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css1/style.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900'
  rel='stylesheet' type='text/css'>
<style>
canvas {
  display: block;
  position: fixed;
  background-color: #000000 !important;
}
</style>
</head>
  <body>

      <script src='js1/sketch.min.js'></script>
  <script src="js1/index.js"></script>
  
   <div id="content" class="container">
     <div class="name">Courses list</div>
     <div class="welcome">Welcome Aboard</div>
     
     <?php


           $query1='SELECT * FROM course';
           $result1 = $mysqli->query($query1);


           if($result1){

            while($obj = $result1->fetch_object()) {

              echo '<div class="large-2 columns">';
              echo '<p><h3>'.$obj->course_id.'</h3></p>';
              echo '<p><h3>'.$obj->description.'</h3></p>';
            }

    }

        $query2='SELECT * FROM user_academia where role="Data Analyst"' ;
           $result2 = $mysqli->query($query2);



           if($result2){

            while($obj = $result2->fetch_object()){

              echo '<div class="large-2 columns">';
              echo '<p><h3>'.$obj->user_name.'</h3></p>';
              echo '<p><h3>'.$obj->company.'</h3></p>';



            }


    }

    $query3 = "SELECT role, SUM(`INST706`) as s706, SUM(`INFM700`) as s700,SUM( `INFM750`) as s750, SUM(`INFM714`) as s714,SUM( `INST737`) as s737, SUM(`INST747`) as s747, SUM(`INFM757`) as s757, SUM(`INFM733`) as s733, SUM(`INFM743`) as s743, SUM(`INFM603`) as s603  FROM user_academia GROUP BY role"; 
   
    $query4 = "SELECT * from user_academia where user_name = 'aditya_rb'";

  
     $result4 = mysql_query($query4);
     $arr = array();
     $count1= mysql_num_rows($result4);

     echo $count1;

while ($row = mysql_fetch_assoc($result4)) {
    $arr[]=$row;
}
     while($element = current($arr)) {
    echo key($arr)."\n";
    next($arr);
}





$courses = array();
                   //
                   //echo '<script>window.location.reload()</script>';
                   $res = $mysqli->query("Select `INST706`, `INFM700`, `INFM750`, `INFM714`, `INST737`, `INST747`, `INFM757`, `INFM733`, `INFM743`, `INFM603` from user_academia where user_name='".$name."'");

                   $result6 = $mysqli->query("select course_id,course_name from courses where course_id = "INST706""

                   while($obj = $res->fetch_object()){


                if($obj->INST706 === 1) {
                  $courses[]= "INST706";
                }
                if($obj->INFM700 === 1) {
                  $courses[] = "INFM700";
                }
                if($obj->INFM750 === 1) {
                  $courses[] = "INFM750";
                }
                if($obj->INFM714 === 1) {
                  $courses[] = "INFM714";
                }
                if($obj->INST737 === 1) {
                  $courses[] = "INST737";
                }
                if($obj->INST747 === 1) {
                  $courses[] = "INST747";
                }
                if($obj->INFM757 === 1) {
                  $courses[] = "INFM757";
                }
                if($obj->INST733 === 1) {
                  $courses[] = "INST733";
                }
                if($obj->INFM743 === 1) {
                  $courses[] = "INFM743";
                }
                if($obj->INFM603 === 1) {
                  $courses[] = "INFM603";
              }

                 } 

                 print_r($courses);











?>

  <script type="text/javascript">
    var points = <?php echo json_encode($result3); ?>;
   
    points.sort(function(a, b){return b-a});
    points.toString();

</script>

<script>
function register(){
  $('#initial-form').fadeOut('fast');
  $('#register-form').fadeIn(1000).delay(1000);
  }
</script>

  </body>
</html>
