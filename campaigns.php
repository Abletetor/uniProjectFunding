<?php

  require_once 'dbh.inc.php';

  $sql = "SELECT post_id,post_title,post_img,post_by,post_date,post_content,post_type,post_tag FROM posts";
  $sqli = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
    
    <?php include("campaigns_head.php") ?>

<body>
    

   <main>
       <?php
          while($row = mysqli_fetch_assoc($sqli)){
       ?>
       <div class="card">
           <div class="image">
               <img src="Registration\uploads/<?php echo $row["post_img"]; ?>" alt="">
           </div>
           <div class="caption">
               <p class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
               </p>
               <p class="product_name"><?php echo $row["post_title"];?></p>
              
           </div>
           
       </div>
       <?php

          }
     ?>
   </main>
   <script>
       var product_id = document.getElementsByClassName("add");
       for(var i = 0; i<product_id.length; i++){
           product_id[i].addEventListener("click",function(event){
               var target = event.target;
               var id = target.getAttribute("data-id");
               var xml = new XMLHttpRequest();
               xml.onreadystatechange = function(){
                   if(this.readyState == 4 && this.status == 200){
                       var data = JSON.parse(this.responseText);
                       target.innerHTML = data.in_cart;
                       document.getElementById("badge").innerHTML = data.num_cart + 1;
                   }
               }

               xml.open("GET","connection.php?id="+id,true);
               xml.send();
            
           })
       }

   </script>
</body>
</html>