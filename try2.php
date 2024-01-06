<?php
 include ('dbh.inc.php');
$sql = "SELECT * FROM posts";
$result = mysqli_query($con, $sql);
$images = array();
while ($row = mysqli_fetch_assoc($result)) {
  $images[] = $row['post_img'];
}
mysqli_close($con);
$i = 0;
if (isset($_GET['post_img'])) {
  $i = $_GET['post_img'];
}
$nextImage = $i + 1;
if ($nextImage >= count($images)) {
  $nextImage = 0;
}
$prevImage = $i - 1;
if ($prevImage < 0) {
  $prevImage = count($images) - 1;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sliding Image</title>
</head>
<body>
  <img src="<?php echo $images[$i]; ?>" alt="Image">
  <a href="?image=<?php echo $prevImage; ?>">Previous</a>
  <a href="?image=<?php echo $nextImage; ?>">Next</a>
  <form action="donate.php" method="post">
    <input type="hidden" name="image" value="<?php echo $i; ?>">
    <input type="submit" value="Donate">
  </form>
</body>
</html>