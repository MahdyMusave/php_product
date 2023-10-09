<?php

    session_start();
    include_once("./class/db.php");
    include_once("./class/login.php");
    include_once("./class/product.php");
    
    //get seetion
    // print_r($_SESSION['username_id']);
  if(isset($_SESSION['username_id']) && !is_numeric($_SESSION['username_id'])){
    $username = $_SESSION['username_id'];
    $check_login = new Login();
    $result=$check_login->check_login($username);
    if($result){
    $Admin_user= $result[0];
    // print_r($Admin_user);
    // print_r($_SERVER);
    if($_SERVER['REQUEST_METHOD']=="post"){
      $product = new Product();
      $result=$product->create_product($_POST);
    }

    //get product
    $product = new Product();
    $products=$product->get_product();
    // print_r($products);



    }else{
      header("location:profile.php");
    }

}else{
  header("location:login.php");
}

// return print_r($_SESSION['$name']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div class="navbar">
    <div class="link">
      <a href='home'>home</a>
      <a href='about'>about</a>
      <a href='news'>news</a>
      <a href='content'>content</a>
    </div>
    <div class="serach">
      <input type="text" placeholder="search" name="search" id="search" >
    </div>
    <div class="">
      <a href="./"></a>
    </div>
  </div>
    <div class="container">
      <div class="content">
        <div class="row" style="display:flex;flex-wrap:wrap;flex-direction:row;justify-content:space-between">
          <div class="col_left" style="border:2px solid red;width:15%;height:830px">
          <div class="category">
            <ul>
              <li>book</li>
              <li>coll</li>
              <li>andriod</li>
              <li>latop</li>
              <li>mobail</li>
            </ul>
          </div>
          </div>
          <div class="col_right" style="border:none;width:83%;height:832px;display:flex;flex-wrap:warp;flex-direction:row;justify-content:space-between">
            <div class="add_product" style="position:relative;width:77%;margin:0;padding:10px;border:2px solid green;height:807 px" >
              <h3>Add new Product</h3>
              <form action="./profile.php" method="post" style="display:flex;flex-wrap:wrap;flex-direction:row;justify-content:space-between" >
               
                <input style="width: 46%;padding:10px;margin:10px;border-radius:10px;background-color:#ddd" type='text' name="product_name" id="product_name"  placeholder="product_name" >
                <input style="width: 46%;padding:10px;margin:10px;border-radius:10px;background-color:#ddd" type='text' name="categoryId" id="categoryId"  placeholder="categoryId" >
                <input style="width: 46%;padding:10px;margin:10px;border-radius:10px;background-color:#ddd" type='text' name="price" id="price"  placeholder="price" >
                <input style="width: 46%;padding:10px;margin:10px;border-radius:10px;background-color:#ddd" type='text' name="amount" id="amount"  placeholder="amount" >
                <input style="width: 46%;padding:10px;margin:10px;border-radius:10px;background-color:#ddd" type='text' name="description" id="description"  placeholder="description" >
                <input style="width: 46%;padding:10px;margin:10px;border-radius:10px;background-color:#ddd" type='file' name="img" id="img"  placeholder="img" >
                <input style="width: 46%;padding:10px;margin:10px;border-radius:10px;background-color:#ddd" type='text' name="tag" id="tag"  placeholder="select colors" >
                <input style="width: 46%;padding:10px;margin:10px;border-radius:10px;background-color:#ddd" type='text' name="model" id="model"  placeholder="model" >
                <input style="width: 46%;padding:10px;margin:10px;border-radius:10px;background-color:#ddd" type='text' name="mark" id="mark"  placeholder="mark" >
                 <input type='submit' value="Add product" style="position: absolute;top: 38%;right: 2%;padding: 10px;border-radius: 8px;font-size: 21px;" >
                
              </form>
            </div>
            <div class="admin_box" style="width:20%;border:2px solid red;height:730px;display: flex;flex-wrap: wrap;flex-direction: column;align-items: center;padding-top:100px" >
               <div class="admin_img" style="width:200px;height:200px;border-radius:50%;border:1px solid red" >
                <img src="./public/imgage/337536779_712647330654929_7497108357965575558_n.jpg" alt="Admin_user" style="width:100%;height:100%;border-radius:50%;border:1px solid yellow" />
              </div>
              <div class="info_admin">
                <h3><?php echo $Admin_user['first_name']. $Admin_user['last_name']?></h3>
                <h4>Eamil : <?php echo $Admin_user['email']?></h4>
                <h5 style='text-align:center'>userName : <?php echo $Admin_user['username']?></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div style="height:1200px;width:90%;margin:15px auto" >
      <div class="row" style="width:98%;display:flex;flex-wrap:wrap;flex-direction:row;justify-content:space-between" >
     
        <?php
       
           foreach($products as $pro){
         
            echo "<div class='col_product' style='width:22%;border:2px solid red;height:600px;margin-top:10px;' >
            <div class='name_product'><h2 style='margin-left:10px'>".$pro['productName']."</h2>"."</div>
               <div class='admin_img' style='width:370px;text-align:center;over-flow:hidden; height:300px;border-radius:10px;' >
                <img src='./public/imgage/337536779_712647330654929_7497108357965575558_n.jpg' alt='Admin_user' style='width:98%;height:98%;' />
              </div>
              <div class='name_product'><h2 style='margin-left:10px'>"." ".$pro['mark']." ".$pro['model']." ".$pro['tags']."</h2>"."</div>
              <div class='name_product'><h2 style='margin-left:10px'>".$pro['price']."</h2>"."</div>
              <div class='name_product'><h2 style='margin-left:10px'>".$pro['description']."</h2>"."</div>
              <form action='' method='post'>
              
              <form>  
            
              ";
          
         
          echo "</div>";
          }
        ?> 
      </div>
    </div>
</body>
</html>