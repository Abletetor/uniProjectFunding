<?php
require '../dbh.inc.php';

if(isset($_GET['post_id'])){
    $post= $_Get['post_id'];
$query="SELECT * from posts where post_id='{$post}'";
$result  = $conn->query($sql,$sql);
if ($result->num_rows > 0) {
while ($row = $result->fetch_array()) {
    $row = mysqli_fetch_assoc($result);
   $title=$row['post_title'];

}
}  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $post= $_Post['post_id'];
    $cardHolderName = $_POST['card_holder'];
    $cardNumber = $_POST['card_number'];
    $amount=$_POST['amount'];
    $expiryDate = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];

    // Simple validation for demonstration purposes
    if (empty($cardHolderName) || empty($cardNumber) || empty($amount)|| empty($expiryDate) || empty($cvv)) {
        echo "All fields are required.";
        exit();
    }

    // Insert data into the database
    $sql = "INSERT INTO payments (post_id,card_holder, card_number,amount, expiry_date, cvv)
            VALUES ('$post','$cardHolderName', '$cardNumber','$amount','$expiryDate', '$cvv')";

    if ($conn->query($sql,$query) === TRUE) {
        echo "Payment Successfully! Please Check Your Mail Address For Details.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
$conn->close();
