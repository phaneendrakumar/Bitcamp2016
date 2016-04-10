<?php


if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

$username = $_POST["username"];
$password = $_POST["pwd"];
$flag = 'true';


$result = $mysqli->query('SELECT username,email_id,password,first_name from `User` order by username asc');



if($result === FALSE){
  die(mysql_error());
}

if($result){
  while($obj = $result->fetch_object()){
    if($obj->username === $username && $obj->password === $password) {
     

      $_SESSION['username'] = $username;
      //$_SESSION['type'] = $obj->type;
      $_SESSION['id'] = $obj->username;
      $_SESSION['fname'] = $obj->first_name;
      echo "login successfull";
      header("location:choice.html");
    } else {

        if($flag === 'true'){
          redirect();
          $flag = 'false';
        }
    }
  }
}


function redirect() {
  echo '<h1>Invalid Login! Redirecting...</h1>';
  header("Refresh: 3; url=index.php");
}


?>
