<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?php echo URL; ?>/assets/css/Sidebarr.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <?php
  $user = getValue("SELECT `adt`.`admission_year`, `adt`.`ssc_marks`, `adt`.`hsc_diploma_marks`, `adt`.`Acad_id`, `adt`.`ssc_year`, `adt`.`hsc_year`, `adt`.`current_sem`, `adt`.`current_year` FROM `academic_details_table` as `adt`,`user_table` WHERE `reg_Id`='" . $id . "' AND `user_table`.`Acad_id` = `adt`.`Acad_id`; ");
  ?>
</head>

<body>
  <?php
  require ROOT . "/components/nav.php";
  ?>
  <section class="home">
    <div class="navbar" style="margin-left: 10px ;padding: 0px 15px 5px 25px ; display:flex;justify-content:space-between;">
      <div class="header" style="padding: 15px 10px 25px 30px;">
        <h1 style="font-size: 30px;">Academic Details</h1>
      </div>
      <div class="profile" style="padding-right :15px; margin-right: 15px;height:45px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.068), 0 6px 20px 0 rgba(0, 0, 0, 0.19);display: flex;margin-left: 500px;margin-top: 12px;">
        <div class="profile-image ">
          <img src="user.png" alt="Student dp" style="width : 30px;  height: 30px;padding-top: 5px;">
        </div>
        <div class="profile-name" style="margin-left: 10px;padding-top: 5px;">
          <h4>Username</h4>
        </div>
      </div>
    </div>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <br>
    <br>
    <h3 style="margin-left: 15px;">UG Details</h3>
    <hr>
    <form method="post" id="academic_details">
      <div class="UG-conatiner" style="display: flex;">
        <div class="current-year" style="margin-left: 10px ;padding: 0px 15px 15px 10px ;">
          <label for="year">Current year:</label>
          <input name="current_year" type="text" id="year"  value="<?php echo $user['current_year']; ?>" readonly><br><br>
        </div>
        <div class="current-sem" style="margin-left: 5px ;padding: 0px 15px 15px 10px ;">
          <label for="sem">Current Sem:</label>
          <input name="current_sem" type="text" id="sem" value="<?php echo $user['current_sem']; ?>" readonly><br><br>
        </div>
      </div>
      <br>
      <h3 style="margin-left: 15px;">HSC/Diploma</h3>
      <hr>
      <div class="HSC_Diploma-conatiner">
        <div class="Year of Passing" style="margin-left: 5px ;padding: 0px 15px 15px 10px ;">
          <label for="grad_date">Year of Passing:</label>
          <input name="hsc_year" type="text" id="grad_date" value="<?php echo $user['hsc_year']; ?>" readonly><br><br>
        </div>
        <div class="HSC Marks" style="margin-left: 5px ;padding: 0px 15px 15px 10px ;">
          <label for="grade">HSC Marks:</label>
          <input name="hsc_diploma_marks" type="text" id="grade" value="<?php echo $user['hsc_diploma_marks']; ?>"placeholder="Enter your marks"><br><br>
        </div>
        <h3 style="margin-left: 15px;">SSC</h3>
        <hr>
        <div class="School-conatiner">
          <div class="Year of Passing" style="margin-left: 5px ;padding: 0px 15px 15px 10px ;">
            <label for="grad_date">Year of Passing:</label>
            <input name="ssc_year" type="text" id="grad_date" value="<?php echo $user['ssc_year']; ?>" readonly><br><br>
          </div>
          <div class="Grade" style="margin-left: 5px ;padding: 0px 15px 15px 10px ;">
            <label for="grade">SSC Marks:</label>
            <input name="ssc_marks" type="text" id="grade" value="<?php echo $user['ssc_marks']; ?>"placeholder="Enter your marks"><br><br>
            <input name="Acad_id" type="hidden" value="<?php echo $user['Acad_id']; ?>"><br><br>
          </div>
        </div>
        <div style="margin-left: 5px ;padding: 0px 15px 15px 10px ;">
          <button type="submit" class="btn btn-outline-primary" href="#" style="width: 80px;">Update</button>
        </div>
      </div>
    </form>
  </section>
  <?php
  require "scripts.php";
  ?>
  <script>
    const URL = "<?php echo URL; ?>";
    $(document).on('submit', '#academic_details', function(e) {
      e.preventDefault();
      var data = $(this).serializeArray();
      data.push({
        name: "method",
        value: 'academic_details'
      });
      $.ajax({
        url: URL + '/api/user',
        type: 'POST',
        data: data,
        dataType: 'JSON',
        success: function(response) {
          var status = response.status;
          if (response.status == "success") {
            console.log("Done");
          }else{
            console.log(response);
          }
        },
        error: function(response) {
          console.log(response);
        }
      });
    });
  </script>
</body>

</html>