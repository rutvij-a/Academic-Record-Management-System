<?php
require_once 'security.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['method'] == 'login') {
        $user = getValue("SELECT * FROM `registration_table` WHERE `Email`='".$_POST['Email']."'");
        if (isset($user)&&$user['PASSWORD']===$_POST['PASSWORD']) {
            $_SESSION['user_id'] = $user['Reg_Id'];
            $return_data->setStatus("success");
            $return_data->setMessage("Login Successful");
        } else {
            $return_data->setStatus("error");
            $return_data->setMessage("Data is missing.");
        }
    } else if ($_POST['method'] == 'signup') {
        if ($_POST['method']) {
            execute("INSERT INTO `registration_table`(`Reg_Id`, `Name`, `Address`, `Email`, `PASSWORD`, `Branch`, `phn_no`) VALUES ('".$_POST['Reg_Id']."','".$_POST['Name']."','".$_POST['Address']."','".$_POST['Email']."','".$_POST['PASSWORD']."','".$_POST['Branch']."','".$_POST['phn_no']."')");
            $return_data->setStatus("success");
            $return_data->setMessage("Signup Successful");
        } else {
            $return_data->setStatus("error");
            $return_data->setMessage("Data is missing.");
        }
    } else if ($_POST['method'] == 'forgotpassword') {
        if (isset($_POST['Email'])) {
            execute("UPDATE `registration_table` SET `PASSWORD`='".$_POST['PASSWORD']."' WHERE `Email`='".$_POST['Email']."'");
            $return_data->setStatus("success");
            $return_data->setMessage("Password reset link sent to your email.");
        } else {
            $return_data->setStatus("error");
            $return_data->setMessage("Data is missing.");
        }
    } else if($_POST['method'] == 'registation_details'){
        if (isset($_POST['Email'])) {
            execute("UPDATE `registration_table` SET `Name`='".$_POST['Name']."',`Address`='".$_POST['Address']."',`Email`='".$_POST['Email']."',`Branch`='".$_POST['Branch']."',`phn_no`='".$_POST['phn_no']."' WHERE `Email`='".$_POST['Email']."'");
            $return_data->setStatus("success");
        } else {
            $return_data->setStatus("error");
            $return_data->setMessage("Data is missing.");
        }
    }else if($_POST['method'] == 'academic_details'){
        if (isset($_POST['Acad_id'])) {
            execute("UPDATE `academic_details_table` SET `ssc_marks`='".$_POST['ssc_marks']."',`hsc_diploma_marks`='".$_POST['hsc_diploma_marks']."',`ssc_year`='".$_POST['ssc_year']."',`hsc_year`='".$_POST['hsc_year']."',`current_sem`='".$_POST['current_sem']."',`current_year`='".$_POST['current_year']."' WHERE `Acad_id`='".$_POST['Acad_id']."'");
            $return_data->setStatus("success");
        } else {
            $return_data->setStatus("error");
            $return_data->setMessage("Data is missing.");
        }
    }else {
        $return_data->setStatus("error");
        $return_data->setMessage("Invalid method");
    } 
} else if ($_SERVER['REQUEST_METHOD'] == 'PATCH') {
    $_POST = $GLOBALS["_POST"];
    
}

echo $return_data->toJSON();
