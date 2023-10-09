<?php
  /**/ 
    //----------->GET RESULT OF REQUEST
    // echo "<pre>";
    // print_r($_POST);
    //---------->check request server 
    // print_r($_SERVER);
    // echo "</pre>";
  /**/
  //------->GET RESULT OF POST;
   /**/
  // if($_SERVER[" REQUEST_METHOD"]="POST"){
  //   echo "<pre>";
  //   print_r($_POST);
  //   echo "</pre>";
  // }
  /**/
    //--------->NOW  CREATE A FILE SIGN_UP IN CLASS FOLDER AND INCLUDE HERE
  include_once("./class/db.php");
  include_once("./class/signUp.php");
  if ($_SERVER[" REQUEST_METHOD"] = "POST") {
    $Sign = new Sign_up();
    $data = $Sign->check_sign($_POST);
    // print_r($data);
    if($data !=""){
    // return $date;
   echo $data;  
    }else{
      echo "you create your user with successfully";
    }
  }
  
 


?>

<form action="./signUp.php" method="post">
  <input type="text" placeholder="first_name" id="first_name" name='first_name'>
  <input type="text" placeholder="last_name" id="last_name" name='last_name'>
  <input type="text" placeholder="username" id="username" name='username'>
  <input type="email" placeholder="email" id="email" name='email'>
  <input type="number" placeholder="phone" id="phone" name='phone'>
  <input type="password" placeholder="password" id="password" name='password'>
  <input type="submit" value="sign_up" >
</form>