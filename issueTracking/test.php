
<?php
include "db.php";
    $title = "heloo";
    $description = "hello";
    $tag = "hello";
    $status = "test";
    $sql = "INSERT INTO `tasks` (`title`,`description`,`tag`,`status`) VALUES ('$title','$description','$tag','$status') ";
    $result = $conn->query($sql);

    if($result == TRUE) {
        echo "issue created successfully";
        header ('location: listIssue.php');
      
    } else{
        echo "error:" .$sql . "<br>" . $con->connect_error;
    }
    $conn->close();
 


?>

//error reporting  in case your code is not display any error

$sql
query
file management with php (file read content   )
proceduire (use in data base administration)
.csv is an extention for a file than cna be use in excel it is mostly use in  machine learning , online endswitch
http method or verb
php made use of the namespace
  nb : a form to dowlod fake filler
   variable : compact,

   for secuirity raison close the file went you opend iterator_apply
   object orirnted php to do frame work
   laravel

   associative and index array
   foreach
   explode
   modal boscrapp
   input type hidden