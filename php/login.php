<?php
session_start();
include 'db.php';
$email = $_POST['email'];
$password = md5($_POST['pass']);
$Role = 'user';
$verification_status = '0';


if (!empty($email) && !empty($password)) {
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'");
    if (mysqli_num_rows($sql) > 0) {
        $random_id = rand(time(), 10000000);
        $otp = mt_rand(111111, 999999);

        if ($sql) {
            if ($sql2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'")) {
                $sql3 = mysqli_query($conn, "INSERT INTO login (unique_id,email, password, otp, verification_status, Role)
                    VALUES ({$random_id},'{$email}','{$password}','{$otp}','{$verification_status}','{$Role}')");
                $sql4 = mysqli_query($conn, "SELECT * FROM login WHERE email = '{$email}'");
                $row = mysqli_fetch_assoc($sql4);
                if ($row) {
                    $_SESSION['unique_id'] = $row['unique_id'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['otp'] = $row['otp'];
                    if ($otp) {
                        $receiver = $email;
                        $subject = "From: <$email>";
                        $body = "Name " . "  \n Email" . " $email \n Otp" . " $otp";
                        $sender = "From: nayansa@gmail.com";

                        if (mail($receiver, $subject, $body, $sender)) {
                            echo "success";
                        } else {
                            echo "Email Problem!" . mysqli_error($conn);
                        }
                    }
                }
            }
        }
    } else {
        echo "Email or Password is Incorrect! ";
    }
} else {
    if ($email == null) {
        printf("Please enter your Email Address");
    } else if ($password == null) {
        printf("Please enter Password");
    }
}
?>