<?php

class Login

  {
  
  
  private $Error;
  
  
  public function login_user($data){
    $email=$data['email'];
    $password=$data['password'];

    $query="select * from user where email='$email' && password='$password'";
    $Db=new db();
    $result=$Db->read($query);
    if($result){
      $row=$result[0];
   
      if($email == $row['email']){
        
        if($password == $row['password']){
          // return $row;
         $userid=$_SESSION['username_id']=$row['username'];
          return print_r($userid);
          // header("location:profile.php");
          
        }else{
          $this->Error .= "password is woring ";
        }
      }else{
        $this->Error .= "this user not found ";
      }
    }else{
       $this->Error .= "please inter your email and password ";
    }
    return $this->Error;
  }

  public function check_login($username){
    // return $username;
    
    $query = "select * from user where username='$username' limit 1";
    $Db = new db();
    $result=$Db->read($query);
    // return $result;
    if($result){
      return $result;
    }else{
      return false;
    }
  }



}