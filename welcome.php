<?php


if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])){

     header("location:index.php");
}

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
     <div class="name">Course Finder</div>
     <div class="welcome">Welcome Aboard</div>
     <form class="form" id="initial-form" method="POST" action="verify.php">
      <input type="text" placeholder="Username" name="username">
      <input type="password" placeholder="Password" name="pwd">
      <div class="button-holder">
        <button type="submit" id="login-button">Login</button>
        <div class="register">or</div>
        <button type="button" id="login-button" onclick="register();">Register for free</button>
      </div>
    </form>
    
    <form class="form" id="register-form" method="POST" action="insert.php">
     <input type="text" placeholder="First Name" name="first_name">
      <input type="text" placeholder="Last Name" name="last_name">
      <div class="button-holder">
     <!-- <span class="areYou">Are you a:</span> -->
      <select name="status">
        <option value="1">Current Student</option>
        <option value="0">Alumni</option>
      </select>
      </div>
      <input type="text" placeholder="Username" name="username">
      <input type="password" placeholder="Password" name="pwd">
      <input type="text" placeholder="email id" name="email_id">
      <input type="date" placeholder="year of graduation" name="year_grad">
      <div class="button-holder">
        <button type="submit">Register</button>
      </div>
    </form>
  </div>

<script>
function register(){
  $('#initial-form').fadeOut('fast');
  $('#register-form').fadeIn(1000).delay(1000);
  }
</script>

  </body>
</html>
