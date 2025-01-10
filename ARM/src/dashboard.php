<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!----======== CSS ======== -->
  <link href="<?php echo URL; ?>/assets/css/Sidebarr.css" rel="stylesheet">
  <!----===== Boxicons CSS ===== -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <!--<title>Dashboard Sidebar Menu</title>-->
</head>

<body>
  <?php
  require ROOT . "/components/nav.php";
  ?>
  <section class="home">
    <div class="text">Dashboard </div>
    <div class="row" style="padding: 15px 10px 25px 10px;margin-left: 10px;margin-right: 10px; display: flex;">
      <div class="col-sm-6">
        <div class="card" style="margin-left: 10px;margin-right: 50px; ">
          <div class="card-body" style="background-color: lightblue;padding: 15px 10px 25px 10px;height: 132px;width:215px;">
            <p class="card-text" style="font-size: 16px;">Total Internships</p>
            <h2 class="card-title">0</h2>
            <a href="<?php echo URL;?>/internship" class="btn btn-primary">Your internships</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card" style="margin-left: 10px;margin-right: 50px;">
          <div class="card-body" style="background-color: lightgreen;padding: 15px 10px 25px 10px;height: 132px;width:215px;">
            <p class="card-text" style="font-size: 16px;">Total Projects</p>
            <h2 class="card-title">0</h2>
            <a href="<?php echo URL;?>/project" class="btn btn-primary">Go to your projects</a>
          </div>
        </div>
      </div>
    </div>
    <div class="card-deck" style="padding: 15px 10px 25px 10px;margin-left: 10px;margin-right: 10px;display:flex">
      <div class="card" style="margin-left: 10px;margin-right: 100px; ">
        <img class="card-img-top" src="<?php echo URL; ?>/assets/img/academic_details.jpg" alt="Card image cap"">
            <div class=" card-body">
        <h5 class="card-title">Academic Details</h5>
        <a class="btn btn-primary" href="<?php echo URL;?>/academic_details" role="button">Go to page</a>
      </div>
    </div>
    <div class="card" style="margin-left: 10px;margin-right: 100px; ">
      <img class="card-img-top" src="<?php echo URL; ?>/assets/img/grade.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Grades</h5>
        <a class="btn btn-primary" href="<?php echo URL; ?>/new_grade_issue/<?php echo $_SESSION['user_id'];?>" role="button">Go to page</a>
      </div>
    </div>
    <div class="card" style="margin-left: 10px;margin-right: 100px; ">
      <img class="card-img-top" src="<?php echo URL; ?>/assets/img/user_1.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">User</h5>
        <a class="btn btn-primary" href="<?php echo URL; ?>/user/<?php echo $_SESSION['user_id'];?>" role="button">Go to page</a>
      </div>
    </div>
    </div>
  </section>
  <?php
  require "scripts.php";
  ?>
</body>

</html>