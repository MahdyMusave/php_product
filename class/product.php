<?php
class Product
{
  private $Error;
  public function create_product($data)
  {
   
    $product_name = $data['product_name'];
    $description = $data['description'];
    $categoryId = $data['categoryId'];
    $price = $data['price'];
    $amount = $data['amount'];
    $img = $data['img'];
    $tag = $data['tag'];
    $model = $data['model'];
    $mark = $data['mark'];
    // // return $data;
    $query = "insert into products(productName,categoryId,price,amount,description,img,tags,model,mark)   
    values
    ('$product_name','$categoryId','$price','$amount','$description','$img','$tag','$model','$mark')";

    $Db = new db();
    $result = $Db->save($query);
    if ($result) {
      return true;
    } else {
      return false;
    }

    // return $this->Error;
  }
  function get_product(){
    $query = "select * from products";
    $Db = new db();
    $result=$Db->read($query);
    if($result){
      return $result;
    }else{
      return false;
    }
      
  }
  
}