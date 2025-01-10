<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?php echo URL; ?>/assets/css/Sidebarr.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <?php
  $user = getValue("SELECT * FROM `registration_table` WHERE `Reg_Id`='" . $id . "'");
  ?>
</head>

<body>
  <?php
  require ROOT . "/components/nav.php";
  ?>
  <section class="home">
    <div class="rt-container">
      <div class="col-rt-12">
        <div class="rt-heading" style="margin-left: 30px;">
          <h1 style="font-size: 30px;">Student Profile Page </h1>
        </div>
      </div>
    </div>
    <div class="rt-container">
      <div class="col-rt-12">
        <div class="Scriptcontent">
          <div class="student-profile py-4">
            <form method="post" id="registation_details">
              <div class="container">
                <div class="row">
                  <div class="col-lg-4" style="padding-bottom: 9px ;margin-left: 30px;">
                    <div class="card shadow-sm">
                      <div class="card-header bg-transparent text-center">
                        <img class="profile_img" src="https://source.unsplash.com/600x300/?student" alt="student dp" style="width: 20%;height: 10%;">
                        <h3>
                          <input name="Name" type="text" value="<?php echo $user['Name']; ?>" style="background-color:rgba(0,0,0,0);border:none;font-weight: bold;font-size: 30px;">
                        </h3>
                        <h4 style="font-size: 15px;">
                          <input name="Email" type="text" value="<?php echo $user['Email']; ?>" style="background-color:rgba(0,0,0,0);border:none;font-weight: bold;">
                        </h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-8" style="margin-left: 30px;padding-top: 18px;">
                    <div class="card shadow-sm">
                      <div class="card-header bg-transparent border-0">
                        <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                      </div>
                      <div class="card-body pt-0">
                        <table class="table table-bordered">
                          <tr>
                            <th width="30%">Registration No.</th>
                            <td width="2%">:</td>
                            <td>
                              <p>
                                <?php echo $user['Reg_Id']; ?>
                              </p>
                            </td>
                          </tr>
                          <tr>
                            <th width="30%">Branch</th>
                            <td width="2%">:</td>
                            <td>
                              <input name="Branch" type="text" value="<?php echo $user['Branch']; ?>">
                            </td>
                          </tr>
                          <th width="30%">Student Mobile no.</th>
                          <td width="2%">:</td>
                          <td>
                            <input name="phn_no" type="text" value="<?php echo $user['phn_no']; ?>">
                          </td>
                          </tr>
                          <tr>
                            <th width="30%">Address</th>
                            <td width="2%">:</td>
                            <td>
                              <input name="Address" type="text" value="<?php echo $user['Address']; ?>">
                            </td>
                          </tr>
                          <tr>
                        </table>
                      </div>
                    </div>
                    <div style="height: 26px"></div>
                  </div>
                </div>
              </div>
              <div style="margin-left: 519px ;padding: 0px 15px 15px 10px ;">
                <button type="submit" class="btn btn-outline-primary" href="#" style="width: 80px;">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
  require "scripts.php";
  ?>
  <script>
    // const loginText = document.querySelector(".title-text .login");
    // const loginForm = document.querySelector("form.login");
    // const loginBtn = document.querySelector("label.login");
    // const signupBtn = document.querySelector("label.signup");
    // const signupLink = document.querySelector("form .signup-link a");
    const URL = "<?php echo URL; ?>";
    // signupBtn.onclick = (() => {
    //   loginForm.style.marginLeft = "-50%";
    //   loginText.style.marginLeft = "-50%";
    // });
    // loginBtn.onclick = (() => {
    //   loginForm.style.marginLeft = "0%";
    //   loginText.style.marginLeft = "0%";
    // });
    // signupLink.onclick = (() => {
    //   signupBtn.click();
    //   return false;
    // });
    $(document).on('submit', '#registation_details', function(e) {
      e.preventDefault();
      var data = $(this).serializeArray();
      data.push({
        name: "method",
        value: 'registation_details'
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