<?php
session_start();
include 'php/db.php';
$unique_id = $_SESSION['unique_id'];
if (empty($unique_id)) {
    header("Location: index.php");
}
$qry = mysqli_query($conn, "SELECT * FROM login WHERE unique_id = '{$unique_id}'");
if (mysqli_num_rows($qry) > 0) {
    $row = mysqli_fetch_assoc($qry);
    if ($row) {
        $_SESSION['verification_status'] = $row['verification_status'];
        if ($row['verification_status'] == 'Verified') {
            header("Location: dashboard.php");
        }
    }
} else {
    header("Location: index.php");
}
?>
<!-- //if(isset($_POST[''.$pTest.'']))
{echo 'something'
;}// -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Verify Account</title>
    <link rel="stylesheet" href="css/verify.css?v=1">
    <link rel="stylesheet" href="css/loader.css">
</head>

<body>
    <!-- <div id="loader">
        <div class="loader row-item">
            <span class="circle"></span>
            <span class="circle"></span>
            <span class="circle"></span>
            <span class="circle"></span>
        </div>
    </div> -->
    <div class="form" style="text-align: center;">
        <h2>Verify Your Account</h2>
        <!-- <p>We emailed you the four digit otp code to Enter the code below to confirm your email address.</p> -->
        <form action="" autocomplete="off">
            <div class="error-text">Error</div>
            <div class="fields_input">
                <input type="number" name="otp1" class="otp_field" placeholder="0" min="0" max="9" required
                    onpaste="return false">
                <input type="number" name="otp2" class="otp_field" placeholder="0" min="0" max="9" required
                    onpaste="return false">
                <input type="number" name="otp3" class="otp_field" placeholder="0" min="0" max="9" required
                    onpaste="return false">
                <input type="number" name="otp4" class="otp_field" placeholder="0" min="0" max="9" required
                    onpaste="return false">
                <input type="number" name="otp5" class="otp_field" placeholder="0" min="0" max="9" required
                    onpaste="return false">
                <input type="number" name="otp6" class="otp_field" placeholder="0" min="0" max="9" required
                    onpaste="return false">
            </div>
            <div class="submit">
                <!-- <input type="button" name="resend" class="resend_btn" value="Resend Again"> -->
                <input type="submit" name = "button" value="Verify Now" class="button">
            </div>

        </form>

        <div id="countdown">0.00</div>
        <!-- <input type="button" name="resend" class="resend_btn" value="Resend Again"> -->
        <!-- <script>
                    function countdownTimer() {
                        const difference = +new TimeRanges("2021-01-01") - +new Date();
                        let remaining = "Time's up!";
                        if (difference > 0) {
                            const parts = {
                                days: Math.floor(difference / (1000 * 60 * 60 * 24)),
                                hours: Math.floor((difference / (1000 * 60 * 60)) % 24),
                                minutes: Math.floor((difference / 1000 / 60) % 60),
                                seconds: Math.floor((difference / 1000) % 60),
                            };
                            remaining = Object.keys(parts).map(part => {
                                return `${parts[part]} ${part}`;
                            }).join(" ");


                        }
                        document.getElementById("countdown").innerHTML = remaining;
                    }
                    countdownTimer();
                    setInterval(countdownTimer, 1000);
                </script> -->
        <div class=button><a href="">Resend</a></div>

    </div>
    <!-- <script>
        $(document).ready(function () {
            //Preloader
            preloaderFadeOutTime = 1200;
            function hidePreloader() {
                var preloader = $('#loader');
                preloader.fadeOut(preloaderFadeOutTime);
            }
            hidePreloader();
        });
    </script> -->

    <script src="js/loginverify.js"></script>
</body>

</html>