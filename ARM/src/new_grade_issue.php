<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo URL; ?>/assets/css/Sidebarr.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <?php
        $user = getValue("SELECT * FROM `grade_table`,`user_table` WHERE `user_table`.`user_id` =`grade_table`.`user_id` AND `user_table`.`reg_id` = '$id'");
        echo $user;
    ?>
</head>

<body>
    <form action="Connection.php" method="post">
    </form>
    <?php
        require ROOT . "/components/nav.php";
    ?>
    <section class="home">
        <div class="text"></div>
        <form class="box" action="Connection.php" method="post" style="margin-left: 3rem;" r>
            <h1>Grade</h1>
            <div style="padding-bottom: 10px;margin-left: 15px;">
                <label for="text2" style="margin-right: 3px;">SSC Marks</label>
                <!-- <input name="SSC_marks" type="text" name="SSC_marks" placeholder="SSC">-->
                <p><?php echo $user['SSC_marks']; ?></p>
            </div>
            <div style="padding-bottom: 10px;margin-left: 15px;">
                <label for="text2" style="margin-right: 1px;">HSC Marks</label>
                <!-- <input name="HSC_marks" type="text" name="HSC_marks" placeholder="HSC">-->
                <p><?php echo $user['HSC_marks']; ?></p>
            </div>
            <div style="padding-bottom: 10px;margin-left: 15px;">
                <label for="text1" style="margin-right: 44px;">Sem1</label>
                <!-- <input name="Sem1" type="text" name="Sem1" placeholder="S1">-->
                <p><?php echo $user['Sem1']; ?></p>
            </div>
            <div style="padding-bottom: 10px;margin-left: 15px;">
                <label for="text2" style="margin-right: 40px;">Sem2</label>
                <!-- <input name="Sem2" type="text" name="Sem2" placeholder="S2">-->
                <p><?php echo $user['Sem2']; ?></p>
            </div>
            <div style="padding-bottom: 10px;margin-left: 15px;">
                <label for="text3" style="margin-right: 40px;">Sem3</label>
                <!-- <input name="Sem3" type="text" name="Sem3" placeholder="S3">-->
                <p><?php echo $user['Sem3']; ?></p>
            </div>
            <div style="padding-bottom: 10px;margin-left: 15px;">
                <label for="text4" style="margin-right: 40px;">Sem4</label>
                <!-- <input name="Sem4" type="text" name="Sem4" placeholder="S4">-->
                <p><?php echo $user['Sem4']; ?></p>
            </div>
            <div style="padding-bottom: 10px;margin-left: 15px;">
                <label for="p1" style="margin-right: 40px;">Sem5</label>
                <!-- <input name="Sem5" type="text" name="Sem5" placeholder="S5">-->
                <p><?php echo $user['Sem5']; ?></p>
            </div>
            <div style="padding-bottom: 10px;margin-left: 15px;">
                <label for="p2" style="margin-right: 40px;">Sem6</label>
                <!-- <input name="Sem6" type="text" name="Sem6" placeholder="S6">-->
                <p><?php echo $user['Sem6']; ?></p>
            </div>
            <div style="padding-bottom: 10px;margin-left: 15px;">
                <label for="p3" style="margin-right: 41px;">Sem7</label>
                <!-- <input name="Sem7" type="text" name="Sem7" placeholder="S7">-->
                <p><?php echo $user['Sem7']; ?></p>
            </div>
            <div style="padding-bottom: 10px;margin-left: 15px;">
                <label for="p4" style="margin-right: 40px;">Sem8</label>
                <!-- <input name="Sem8" type="text" name="Sem8" placeholder="S8"> -->
                <p><?php echo $user['Sem8']; ?></p>
            </div>
        </form>
    </section>
    <?php
    require "scripts.php";
    ?>
</body>

</html>