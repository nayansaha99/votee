<?php
session_start();
include 'php/db.php';
$unique_id = $_SESSION['unique_id'];
$email = $_SESSION['email'];

if (empty($unique_id)) {
    header("Location: index.php");
}
$qry = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$unique_id}'");
if (mysqli_num_rows($qry) > 0) {
    $row = mysqli_fetch_assoc($qry);
    if ($row) {
        $_SESSION['Role'] = $row['Role'];
        if ($row['verification_status'] != 'Verified') {
            header("Location: loginverify.php");
        }
    }
}

?>














<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Verify Account</title>
    <link rel="stylesheet" href="css/verify.css">
    <link rel="stylesheet" href="css/loader.css">
</head>

<body>
<h1>Dashboard</h1>

</body>
</html>  
