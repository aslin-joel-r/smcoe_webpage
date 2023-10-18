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

    $sql = "SELECT we.event_desc e_title,YEAR(we.event_date) YEAR,event_date e_date,event_desc e_desc,we.event_link e_url,'' e_type,MONTH(event_date) mevent_date,DAY(event_date) dayevent_date,MONTHNAME(event_date),SUBSTR(MONTHNAME(event_date),1,3) smonth FROM documentation.website_event we WHERE we.status>0 AND we.`event_type`='Event' AND NOW() BETWEEN we.doa AND we.doe ORDER BY we.order_no";
    $result = mysqli_query($dbcon, $sql);
    echo "<h2>SQL Query:</h2>". $sql;
    if (!$result) {
        die("Error in the query: " . mysqli_error($dbcon));
    }

    if (mysqli_num_rows($result) > 0) {
        echo "<br><h2>Result</h2><table border='1'><tr>";
        while ($fieldinfo = mysqli_fetch_field($result)) {
            echo "<th>" . $fieldinfo->name . "</th>";
        }
        echo "</tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>" . $value . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No Data Found ";
    }
    mysqli_close($dbcon);
?>

</body>
</html>