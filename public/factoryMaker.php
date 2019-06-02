    <?php

    $filename = 'tester.php';
    $handle = fopen($filename, 'a');
    @ require_once ("index.html");
    $con = mysqli_connect("127.0.0.1", "root", "", "factories");
    if ($con->connect_error) {
        die("Database connection failed: " . $dbconnect->connect_error);
    }
//set default client character set 
    mysqli_set_charset($con, 'utf-8');
    $str = "";
    $result = mysqli_query($con, "SELECT * FROM factory ");
    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
        $str = $str . htmlentities($row[0]) . " </br>\n";
        for ($i = 1; $i <= $row[2]; $i++) {
            $sql = "UPDATE factory SET child" . $i . "=" .
                    rand($row[3], $row[4]) . " WHERE id=" . $row[1];
            $str = $str . htmlentities($row[$i + 4]) . " </br>\n";
            if ($con->query($sql) != TRUE) {
                echo "Error updating record: " . $con->error;
            }
        }
    }
// file exists and writable
    if (is_writable($filename)) {
        if (!$handle) {
            echo "Cannot open file ($filename)";
            exit;
        }
        if (fwrite($handle, $str) === FALSE) {
            echo "Cannot write to file ($filename)";
            exit;
        }
        fclose($handle);
    } else {
        echo "The file $filename is not writable";
    }
    mysqli_free_result($result);
    mysqli_close($con);
    ?>