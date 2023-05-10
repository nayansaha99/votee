<?php
session_start();
include 'php/db.php';
$unique_id = $_SESSION['unique_id'];
$email = $_SESSION['email'];
$password = $_SESSION['password'];

if (empty($unique_id)) {
    header("Location: index.php");
}
$qry = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$unique_id}'");
if (mysqli_num_rows($qry) > 0) {
    $row = mysqli_fetch_assoc($qry);
    if ($row) {
        $_SESSION['Role'] = $row['Role'];
        if ($row['verification_status'] != 'Verified') {
            header("Location: verify.php");
        }
        
    }
} 
// else {
//     header("Location: index.php");
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in & Sign Up Form</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="CSS/form.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/loader.css">


</head>

<body>
    
    <div id="loader">
        <div class="loader row-item">
            <span class="circle"></span>
            <span class="circle"></span>
            <span class="circle"></span>
            <span class="circle"></span>
            <span class="circle"></span>
        </div>
    </div>
    <div class="form-box">
        <div class="form">
            <form action="" autocomplete="off">
                <h2>Login</h2>
                <div class="error-text">Error</div>
                <div class="input-box">
                    <i class='bx bxs-envelope' style='color:#0b3d0b'></i>
                    <input type="email" name="email" placeholder="email">
                </div>
                <div class="input-box">
                    <i class='bx bxs-lock-alt' style='color:#0b3d0b'></i>
                    <input type="password" name="pass" placeholder="password">
                </div>
                <div class="submit">
                    <input type="submit" name = "button" class="btn" value="Login Now">
                </div>
                <div class="group">
                    <span><a href="forget-password.php">Forget-Password</a></span>
                    <span><a href="register.php">Signup</a></span>
                </div>
            </form>
        </div>

    </div>
</body>

</html>
<script src="js/login.js"></script>
<script>
        $(document).ready(function () {
            //Preloader
            preloaderFadeOutTime = 1200;
            function hidePreloader() {
                var preloader = $('#loader');
                preloader.fadeOut(preloaderFadeOutTime);
            }
            hidePreloader();
        });
    </script>
</body>

</html>