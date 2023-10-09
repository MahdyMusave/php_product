<?php 
  // include ("./db.php");
  class Sign_up{
    private $Error;
    public function check_sign($post){
      // print_r($post);
      foreach($post as $data_key =>$value){
        // return $data_key;
        if(empty($value)){
          $this->Error .="<pre>". "you must full all row ".$data_key."</pre>";
          if($data_key == "email"){
             if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$value)){
              
              $this->Error .= "invalid email address !";
             
            }
            if($data_key == "first_name"){
              if(is_numeric($value)){
                $this->Error .= "can not be numric !";
              }
            }
            if($data_key == "last_name"){
              if(is_numeric($value)){
                $this->Error .= "can not be numric !";
              }
            }
          }
        }
      }
    //print_r($this->Error == " ");
      if($this->Error !==" "){
         $this->create_User($post);
      }
    return $this -> Error;
    }
  

    public function create_User($data){
      $email=$data['email'];
      $username=$data['username'];
      $read="select * from user where email='$email' || username='$username'";
      $Db=new db();
      $result=$Db->read($read);
      if($result == true){
       return $this->Error .= "this user have sign up !  "." ".$email;
      }else{

      // // print_r($data);
        $first_name = $data['first_name'];
        $last_name=$data['last_name'];
        $username=$data['username'];
        $email=$data['email'];
        $phone=$data['phone'];
        $password= $data['password'];

        $query = "insert into user(first_name,last_name,username,email,phone,password) 
        value('$first_name','$last_name','$username','$email','$phone','$password')";
      // return print_r($query);
        $Db = new db();
        $Db->save($query);
      }
      
    }
  }


  ?>