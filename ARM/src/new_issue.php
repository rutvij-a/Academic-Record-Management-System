<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?php echo URL; ?>/assets/css/Sidebarr.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <?php
    require ROOT . "/components/nav.php";
  ?>
  <section class="home">
    <div class="text">Dashboard Sidebar</div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4" style="padding-bottom: 9px ;">
          <div class="card shadow-sm">
            <div class="card-header bg-transparent text-center">
              <img class="profile_img" src="https://source.unsplash.com/600x300/?student" alt="student dp">
              <h3>Ajit</h3>
              <h4 style="font-size: 15px;">ajit.d_19@sakec.ac.in</h4>
            </div>
            <div class="card-body">
              <p class="mb-0"><strong class="pr-1">Student ID:</strong>C321000001</p>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card shadow-sm">
            <div class="card-header bg-transparent border-0">
              <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
            </div>
            <div class="card-body pt-0">
              <table class="table table-bordered">
                <tr>
                  <th width="30%">Registration No.</th>
                  <td width="2%">:</td>
                  <td>1xxxx</td>
                </tr>
                <tr>
                  <th width="30%">Roll No.</th>
                  <td width="2%">:</td>
                  <td>2</td>
                </tr>
                <tr>
                  <th width="30%">Branch</th>
                  <td width="2%">:</td>
                  <td>Electronics</td>
                </tr>
                <tr>
                <tr>
                  <th width="30%">Admission year</th>
                  <td width="2%">:</td>
                  <td>2019</td>
                </tr>
                <tr>
                  <th width="30%">Gender</th>
                  <td width="2%">:</td>
                  <td>Male</td>
                </tr>
                <th width="30%">Currently in (year)</th>
                <td width="2%">:</td>
                <td>3</td>
                </tr>
                <tr>
                  <th width="30%">Graduating year(expected)</th>
                  <td width="2%">:</td>
                  <td>2023</td>
                </tr>
                <tr>
                  <th width="30%">Course name</th>
                  <td width="2%">:</td>
                  <td>Bachelors in Electronics Engineering</td>
                </tr>
                <tr>
                  <th width="30%">Course ID</th>
                  <td width="2%">:</td>
                  <td>ELC601</td>
                </tr>
                <tr>
                  <th width="30%">Student Mobile no.</th>
                  <td width="2%">:</td>
                  <td>91378xxxxx</td>
                </tr>
                <tr>
                  <th width="30%">Address</th>
                  <td width="2%">:</td>
                  <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum libero qui eos, quos veniam iusto quidem quia ipsam similique voluptatibus ad obcaecati nemo ea, dolores, mollitia distinctio deserunt fuga voluptatem?</td>
                </tr>
                <tr>
                <tr>
                  <th width="30%">College Mentor</th>
                  <td width="2%">:</td>
                  <td>Prof. Manisha Mane</td>
                </tr>
                <tr>
                  <th width="30%">Category</th>
                  <td width="2%">:</td>
                  <td>Open</td>
                </tr>
  </section>
  <?php
  require "scripts.php";
  ?>
</body>

</html>