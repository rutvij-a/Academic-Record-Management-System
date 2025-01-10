<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo URL; ?>/assets/css/forgot_password.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title> </title>
</head>

<body>
    <div class="form-container">
        <form action="#" method="POST" class="form-wrap">
            <h2>Forgot Password</h2>
            <div class="form-box">
                <input type="text" placeholder="Enter Email" />
            </div>
            <div class="form-submit">
                <input type="submit" value="Send" />
            </div>
        </form>
    </div>
    <?php
    require "scripts.php";
    ?>
</body>

</html>