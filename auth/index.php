<?php
require "../acm/SysFileAutoLoader.php";
$AuthenticationForm = ReturnSessionalValues("Authview", "AUTHENTICATION_FORM", "LoginForm");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?php echo APP_NAME; ?> | Login</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <?php include "../assets/HeaderFiles.php"; ?>
</head>

<body>
    <div class="hold-transition login-page app-bg">
        <div class="login-box">
            <?php include __DIR__ . "/views/" . LOGIN_FORMS[$AuthenticationForm]; ?>
        </div>
        <?php include "../assets/FooterFiles.php"; ?>
    </div>
</body>

</html>