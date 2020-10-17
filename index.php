<?php
include('server.php');
if (empty($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first to view this paage";
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Smile Dental Clinic</title>
    <link rel="stylesheet" type="text/css" href="basic.css">
</head>

<body>
    <?php
    include('header.php');
    $type = $_SESSION['user_type'];
    if ($type == 'patient') {
        include('patient_home.php');
    }
    ?>
    <br>
    <br>

</body>

</html>