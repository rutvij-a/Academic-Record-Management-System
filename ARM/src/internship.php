<!DOCTYPE html>
<html lang="en">

<head>
     <style type="text/css">
          <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><meta name="viewport"content="width=device-width, initial-scale=1.0"><link href="<?php echo URL; ?>/assets/css/internship.css"rel="stylesheet"></head><body><nav><div class="header1"><a href=""class="button1"style="text-decoration: none;margin-left: 70%;">Home</a></div></nav>
     </style>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <div class="title">
     </div>
     <div class="container">
          <div class="title1">
               <ul>Internship</ul>
          </div>
          <form name="add_name" id="add_name" method='POST'>
               <table class="styled-table" id="dynamic_field">
                    <thead>
                         <tr>
                              <th>Internship</th>
                              <th>Duration</th>
                              <th>Status</th>
                              <th>User</th>
                              <th>Company Name</th>
                              <th>Faculty Guide</th>
                              <th>Role</th>
                              <th></th>
                         </tr>
                    </thead>
                    <tbody>
                         <tr>
                              <td><input type="text" name="a[]" placeholder="Your project" class="no-outline" /></td>
                              <td><input type="text" name="b[]" placeholder="" class="no-outline" /></td>
                              <td><input type="text" name="c[]" placeholder="" class="no-outline" /></td>
                              <td><input type="text" name="d[]" placeholder="" class="no-outline" /></td>
                              <td><input type="text" name="e[]" placeholder="" class="no-outline" /></td>
                              <td><input type="text" name="f[]" placeholder="" class="no-outline" /></td>
                              <td><input type="text" name="g[]" placeholder="" class="no-outline" /></td>
                              <td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td>
                         </tr>
                    </tbody>
               </table>
               <button class="button1" style="text-decoration: none;margin-left: 47%" name="submit" id="submit">SAVE</button>
               <br>
               <div class="result">
               </div>
          </form>
          </tbody>
     </div>
     <a href="cash.php" class="button2" style="text-decoration: none;">&laquo; Prev</a>
     <a href="safety_and_protection.php" class="button3" style="text-decoration: none;">Next &raquo;</a>
     </body>

</html>
<?php
require "scripts.php";
?>
<script>
     $(document).ready(function() {
          var i = 1;
          $('#add').click(function() {
               i++;
               $('#dynamic_field').append('<tr id="row' + i + '"><td><input type="text" name="a[]" placeholder="" class="no-outline" /><td><input type="text" name="b[]" placeholder="" class="no-outline" /><td><input type="text" name="c[]" placeholder="" class="no-outline" /><td><input type="text" name="d[]" placeholder="" class="no-outline" /><td><input type="text" name="e[]" placeholder="" class="no-outline"/><td><input type="text" name="f[]" placeholder="" class="no-outline" name_list" /><td><input type="text" name="g[]" placeholder="" class="no-outline" /></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
          });
          $(document).on('click', '.btn_remove', function() {
               var button_id = $(this).attr("id");
               $('#row' + button_id + '').remove();
          });
          $('#submit').click(function() {
               $.ajax({
                    url: "liabilities_db.php",
                    method: "POST",
                    data: $('#add_name').serialize(),
                    success: function(data) {
                         alert(data);
                         $('#add_name')[0].reset();
                    }
               });
          });
     });
</script>