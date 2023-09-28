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
$sql = "SELECT staff_master.staff_id AS staff_id,master_desigination.desigination desigination,
GROUP_CONCAT(staff_promotion.md_id), staff_master.legend , CONCAT(staff_master.first_name,' ',staff_master.last_name)first_name , staff_master.department_id,master_department.dept_name , staff_photo.photo ,  staff_promotion.status, staff_qualification.status,staff_promotion.from_date, GROUP_CONCAT(deg_type ORDER BY staff_qualification.yop) deg_type FROM camps.staff_master INNER JOIN camps.master_department ON (staff_master.department_id = master_department.department_id  AND staff_master.sc_id=1) INNER JOIN camps.staff_photo ON (staff_photo.staff_id = staff_master.staff_id) INNER JOIN camps.staff_promotion ON (staff_promotion.staff_id = staff_master.staff_id) INNER JOIN camps.staff_qualification ON (staff_qualification.staff_id = staff_master.staff_id AND staff_qualification.status=1) INNER JOIN camps.master_desigination ON master_desigination.md_id=staff_promotion.md_id INNER JOIN camps.staff_degree_type ON (staff_qualification.degree_id = staff_degree_type.degree_id) WHERE staff_promotion.status=2 AND staff_degree_type.degree_id NOT IN (23,24) AND  staff_master.working_status='working' AND master_department.department_id='1' GROUP BY staff_master.staff_id;
";



$result = mysqli_query($dbcon, $sql);
if (mysqli_num_rows($result) > 0) {
    while($data = mysqli_fetch_assoc($result)) {
        printf("<br>%s", $data["staff_id"]);
        printf("<br>%s", $data["desigination"]);
        printf("<br>%s", $data["staff_id"]);
        printf("<br>%s", $data["staff_id"]);
  }
} else {
    echo "0 results";
}

mysqli_close($dbcon);
?>