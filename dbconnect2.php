<html>
<body>
<?php
$servername = "172.18.0.1";
$username = "root";
$password = "root";
$db="mysql";
$port="33070";  
$dbcon = mysqli_connect($servername, $username, $password,$db,$port);
if (!$dbcon) {
    die("Connection failed: " .  mysqli_connect_error());
}
echo "Connected successfully";
$sql = "SELECT sm.staff_id,TRIM(CONCAT(sm.`legend`,' ',IFNULL(sm.first_name,''),' ',IFNULL(sm.middle_name,''),' ',IFNULL(sm.last_name,''),' ')) staff_name,TIMESTAMPDIFF(YEAR,sm.dob,NOW()) age,sav.`text_val`,DATE_FORMAT(doj,'%d-%m-%Y') doj,sav2.`text_val`,sm.`institute_email_id`,sm.`mobile_no` FROM camps.`staff_master` sm LEFT JOIN documentation.`ss_additional_values` sav ON sav.`ss_am_id`=21 AND sav.`ss_id`=sm.staff_id LEFT JOIN documentation.`ss_additional_values` sav2 ON sav2.`ss_am_id`=10 AND sav2.`ss_id`=sm.staff_id WHERE sm.staff_id=1026";



$result = mysqli_query($dbcon, $sql);
if (mysqli_num_rows($result) > 0) {
    while($data = mysqli_fetch_assoc($result)) {
        printf("<br>%s", $data["staff_id"]);
        printf("<br>%s", $data["staff_name"]);
        printf("<br>%s", $data["age"]);
        printf("<br>%s", $data["doj"]);
        printf("<br>%s", $data["institute_email_id"]);
        printf("<br>%s", $data["mobile_no"]);
        printf("<br>%s", $data["doj"]);
        printf("<br>%s", $data["doj"]);
  }
} else {
    echo "0 results";
}

mysqli_close($dbcon);
?>

