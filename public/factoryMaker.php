<?php
include("index.html");
$con = mysqli_connect("127.0.0.1", "root", "", "factories");
if ($con->connect_error) {
    die("Database connection failed: " . $dbconnect->connect_error);
}
//   write to a file
//$select = "data what we trying to store in a file";
//$file = fopen("test.txt", "w");        
//fwrite($file, $select);
//fclose($file);
//
//
//if (isset($_POST['submit'])) {
//    $reviewer_name = $_POST['reviewer_name'];
//    $star_rating = $_POST['star_rating'];
//    $details = $_POST['details'];
//
//    $query = "INSERT INTO user_review (reviewer_name, star_rating, details)
//  VALUES ('$reviewer_name', '$star_rating', '$details')";
//
//    if (!mysqli_query($dbconnect, $query)) {
//        die('An error occurred. Your review has not been submitted.');
//    } else {
//        echo "Thanks for your review.";
//    }
//}
//set the default client character set 
mysqli_set_charset($con, 'utf-8');
$str = "";
$result = mysqli_query($con, "SELECT * FROM factory "); //WHERE id=" . $wisherID);
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {

    $str= $str.htmlentities($row[0]) . " </br>";
    for ($i = 1; $i <= $row[2]; $i++) {
        $sql = "UPDATE factory SET child".$i."=".rand($row[3], $row[4]).
                " WHERE id=" . $row[1];
        $str = $str.htmlentities($row[$i + 4]) . " </br>";
        if ($con->query($sql) != TRUE) {
                echo "Error updating record: " . $con->error;
        }
    }
}
//$sbmit = 'ok';
//if (isset($_POST["'.$sbmit.'"])) {
//    echo "".$str;
//}
 echo $str;
mysqli_free_result($result);
mysqli_close($con);
?>