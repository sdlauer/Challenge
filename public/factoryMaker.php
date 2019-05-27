    <?php

    @ require_once ("htmlpage.html");
// Load the HTML document
    $doc = new DOMDocument;
    $doc->loadHtmlFile('htmlpage.html');

// Get the parent node where you want the insertion to occur
    $parent = $doc->getElementsByTagName('body')->item(0);

// Create the child element 
    $child = $doc->createElement('span');
    $child->setAttribute('class', 'text');

// Append (insert) the child to the parent node
    $parent->appendChild($child);

// Save the resulting HTML
    echo $doc->saveHTML();

    $filename = 'tester.html';
    $somecontent = "Add this to the file\n";

// Let's make sure the file exists and is writable first.
    if (is_writable($filename)) {

        // In our example we're opening $filename in append mode.
        // The file pointer is at the bottom of the file hence
        // that's where $somecontent will go when we fwrite() it.
        if (!$handle = fopen($filename, 'a')) {
            echo "Cannot open file ($filename)";
            exit;
        }

        // Write $somecontent to our opened file.
        if (fwrite($handle, $somecontent) === FALSE) {
            echo "Cannot write to file ($filename)";
            exit;
        }
        else {fwrite($handle, $somecontent);}
        echo "Success, wrote ($somecontent) to file ($filename)";

        fclose($handle);
    } else {
        echo "The file $filename is not writable";
    }

    @ require_once ("index.html");
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

        $str = $str . htmlentities($row[0]) . " </br>";
        for ($i = 1; $i <= $row[2]; $i++) {
            $sql = "UPDATE factory SET child" . $i . "=" . rand($row[3], $row[4]) .
                    " WHERE id=" . $row[1];
            $str = $str . htmlentities($row[$i + 4]) . " </br>\n";
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
  file_put_contents('tester.html', $str, FILE_APPEND);


   $doc = new DOMDocument;
    $doc->loadHtmlFile('htmlpage.html');

// Get the parent node where you want the insertion to occur
    $parent = $doc->getElementsByTagName('body')->item(0);

// Create the child element 
    $child = $doc->createElement('span');
    $child->setAttribute('class', 'text');

// Append (insert) the child to the parent node
    $parent->appendChild($child);

// Save the resulting HTML
    echo $doc->saveHTML();
    mysqli_free_result($result);
    mysqli_close($con);
    ?>