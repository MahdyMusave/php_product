<?php
  session_start();
  
  include_once("./class/db.php");
  include_once("./class/signUp.php");
  include_once("./class/login.php");

  if ($_SERVER["REQUEST_METHOD"] = "POST") {

    $login = new Login();
    $data = $login->login_user($_POST);
    // print_r($data);
    if($data ==""){
      echo "bad";
    }
  // $_SESSION['name'] = 'kjdhksjh';
  }

?>

<form action="./login.php" method="post">
  <input type="email" placeholder="email" id="email" name='email'>
  <input type="password" placeholder="password" id="password" name='password'>
  <input type="submit" >
</form>