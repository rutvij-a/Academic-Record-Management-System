<?php
function function_alert($message)
{
    echo "<SCRIPT>alert('$message');</SCRIPT>";
}
function redirect_after_msg($message, $location)
{
    function_alert($message);
    echo "<SCRIPT>window.location = '$location';</SCRIPT>";
}
function goToFile($location)
{
    echo "<SCRIPT>window.location = '$location';</SCRIPT>";
}
function fileTransfer($fileInputName, $location)
{
    $data = array(
        "error" => NULL,
        "file_new_name" => NUll
    );
    $file_photo_error = $_FILES[$fileInputName]['error'];
    $phpFileUploadErrors = array(
        0 => 'There is no error, the file uploaded with success',
        1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
        2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
        3 => 'The uploaded file was only partially uploaded',
        4 => 'No file was uploaded',
        6 => 'Missing a temorary folder',
        7 => 'Failed to write file to disk,',
        8 => 'A PHP extension stopped the file upload.',
        9 => 'The image should be of jpg, jpeg, png.',
    );
    if ($file_photo_error == 0) {
        $extensions = array('jpg', 'jpeg', 'png');
        $file_bill_photo = explode(".", $_FILES[$fileInputName]["name"]);
        $file_ext_bill_photo = end($file_bill_photo);
        if (in_array($file_ext_bill_photo, $extensions)) {
            $data['file_new_name'] = uniqid('', true) . "." . $file_ext_bill_photo;
            $location_file = $location . "/" . $data['file_new_name'];
            move_uploaded_file($_FILES[$fileInputName]["tmp_name"], $location_file);
        } else {
            $data['error'] = $phpFileUploadErrors[9];
        }
    } else {
        $data['error'] = $phpFileUploadErrors[$file_photo_error];
    }
    return $data;
}
function deleteFile($folder_location, $filename)
{
    if (file_exists($folder_location . $filename)) {
        gc_collect_cycles();
        return unlink($folder_location . $filename);
    } else {
        return false;
    }
}
function execute($sql)
{
    global $conn;
    return mysqli_query($conn, $sql);
}
function getValue($sql)
{
    return mysqli_fetch_assoc(execute($sql));
}
function getAllValues($sql)
{
    $array[0] = null;
    $count = getNumRows($sql);
    $execute = execute($sql);
    for ($i = 0; $i < $count; $i++) {
        $array[$i] =  mysqli_fetch_assoc($execute);
    }
    return $array;
}
function getNumRows($sql)
{
    return mysqli_num_rows(execute($sql));
}
function getSpecificValue($sql, $columnName)
{
    $variable = getValue($sql);
    return $variable[$columnName];
}
function removeDulicateRow()
{
    $sql   = "DELETE FROM `csi_userdata` WHERE `id` IN ( SELECT `id` FROM `csi_userdata` GROUP BY `emailID` HAVING COUNT(*) >1)'";
    return execute($sql);
}
function doesEmailIdExists($email)
{
    $count   = getSpecificValue("SELECT COUNT(`id`) as `count` FROM `csi_userdata` WHERE `emailID`='$email'", 'count');
    if ($count == 0) {
        return false;
    } else if ($count == 1) {
        return true;
    } else if ($count > 1) {
        removeDulicateRow();
        return true;
    }
}
/**
 *  Convert's Snake Case to Camel Case
 *  
 *  Example:
 *  ```
 *  echo snakeToCamel('hello_world');
 *  # Output: helloWorld
 *  echo snakeToCamel('hello_world',true);
 *  # Output: HelloWorld
 *  ```
 *  
 *  @param  mixed $string Snake Case String
 *  @param  mixed $upper_camel_case True if you want to return Upper Camel Case
 *  @return String 
 */
function snakeToCamel($string, $upper_camel_case = false): String
{
    $str = str_replace(' ', '', ucwords(str_replace('_', ' ', $string)));
    if (!$upper_camel_case) {
        $str[0] = strtolower($str[0]);
    }
    return $str;
}

function camelToSnake($string): string
{
    return strtolower(preg_replace('/([a-z])([A-Z])/', '$1_$2', $string));
}
function getArray($variables_name, &$reference): array
{
    $array = array();
    foreach ($variables_name as $variable_name) {
        $function_name = "get" . snakeToCamel($variable_name, true);
        $array[$variable_name] = $reference->$function_name();
    }
    return $array;
}