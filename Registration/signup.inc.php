<?php

if (isset($_POST['signup-submit'])) {
    require 'dbh.inc.php';
    $Name = $_POST['uid'];
    $email = $_POST['mail'];

    $gender = $_POST['gender'];
    $user_p = $_POST['user_p'];
    $dob = $_POST['dob'];
    $p_no = $_POST['pnum'];
    $address = $_POST['add'];
    $linkedin = $_POST['l_url'];
    $password =$_POST['pwd'];
    $pass =$_POST['pwd-repeat'];

    if (!empty($_POST['ema_val_coa']) && $_POST['ema_val_coa'] == '8') {
    } else {
        header("Location: signup.php?error=invalidmail");
        exit();
    }
    if ($user_p == 'in') {
        $s_tof_i = $_POST['s_tof_i'];
        $i_before = $_POST['i_before'];
        $t_us_w = $_POST['t_us_w'];
        $amt_in_y = $_POST['amt_in_y'];
        if ($i_before == "yes") {
            if (empty($t_us_w)) {
                header("Location: signup.php?error=emptyfield_inv");
                exit();
            }
        } else {
            $t_us_w = $i_before;
        }
    }
    if (empty($linkedin) || empty($Name) || empty($email)  || empty($gender) || empty($user_p) || empty($dob) || empty($address) || empty($p_no)|| empty($password) || empty($pass)){
        header("Location: signup.php?error=emptyfields&uid=" . $Name . "&mail=" . $email);
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: signup.php?error=invalidmailuid");
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: signup.php?error=invalidmail&uid=" . $Name);
        exit();
    } else {
        // checking if a user already exists with the given username

        if ($user_p != 'in') {
            $sql = "SELECT `fundraiser_email_id` from fundraiser where `fundraiser_email_id`='$email';";
        } else {
            $sql = "SELECT investor_email_id from investor where investor_email_id='$email'";
        }
        $result=$conn->query($sql);
        if (!$result) {
            header("Location: signup.php?error=sqlerror");
            exit();
        } else {
            

            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
                header("Location: signup.php?error=usertaken&mail=" . $email);
                exit();
            } else {
                $FileNameNew = 'default.png';
                require 'upload.inc.php';
                if ($user_p != 'in') {
                    $sql = "INSERT INTO fundraiser(`fundraiser_email_id`, `linked_in`,
                     `name`, `phone`, `address`, `gender`, 
                     `profile_pic`, `DOB`, `password`)
                        values ('{$email}','{$linkedin}','{$Name}','{$p_no}',
                         '{$address}','{$gender}','{$user_p}','{$dob}','{$password}')";
                         
                      
                        
                } else {
                    $sql = "INSERT INTO investor(`investor_email_id`, `linked_in`, `name`, `phone`,
                     `type_of_invest`, `invest_buget`, `invested_before`, `address`, `profile_pic`, `DOB`, `password`, `gender`) 
                        values ('{$email}','{$linkedin}',
                       '{$Name}','{$p_no}','{$s_tof_i}','{$amt_in_y}','{$i_before}',
                       '{$address}','{$user_p}','{$dob}','{$password}','{$gender}')";
                        
                }
                
                
                $result=$conn->query($sql);
                
                if (!$result) {
                    header("Location: signup.php?error=sqlerror");
                    exit();
                } 
                
    mysqli_close($conn);
} 
        }
    }
    header("location: login.php");
}else {
    header("Location: signup.php");
    exit();
}
?>