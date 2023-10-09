<!-- <div style="border:2px solid orange;height:1200px;width:98%;margin:15px auto" >
      <div class="row" style="border:2px solid red;display:flex;flex-wrap:wrap;flex-direction:row;justify-content:space-between" >
        <!-- <div class="col_product" style="width:30%;border:2px solid red;height:300px;" >

        </div>
        <div class="col_product" style="width:30%;border:2px solid red;height:300px;" >

        </div>
        <div class="col_product" style="width:30%;border:2px solid red;height:300px;" >

        </div> -->
        <?php
       
           foreach($get_product as $pro){
          return print_r($pro['Id']);
          //   echo "<div class='col_product' style='width:30%;border:2px solid red;height:350px;margin-top:10px;' >";
          
          
          // echo "</div>";
          }
        ?> 
      </div>
    </div>-->