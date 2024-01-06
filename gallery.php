<?php

  require_once 'dbh.inc.php';

  $sql = "SELECT post_id,post_img FROM posts";
  $sqli = $conn->query($sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php 
  
  include("head.php");
  ?>
  <title>Gallery | Intellectual Funding Aid System</title>
  </header>
<?php 
include("gallary_content.php");
?>
  <main>
       <?php
          while($row = mysqli_fetch_assoc($sqli)){
       ?>
       <div class="card">
           <div class="image">
               <img src="Registration\uploads/<?php echo $row["post_img"]; ?>" alt="">
           </div>
           
       </div><?php }?>
  </main>

  <?php include('footer.php'); ?>
  <script src="sites/default/files/js/js_Gsr4Z7IbyFg5iVkEPEq9CfGUyKi4hM9v-JKni4vxGZw.js"></script>
</body>

</html>