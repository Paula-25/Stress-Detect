<!--My StyleSheet-->
<link rel="stylesheet" href="assets/css/styler.css" type="text/css">

<?php
$mail = $_POST['user_email'];

//checking connection
$connection = mysqli_connect("localhost", "root", "","hng_db") or 
    die('Error connecting to MySQL server');


//execute sql query
$result=
mysqli_query($connection, "insert into register values('$mail')");

//check query execution
if (!$result)
{
    die ("Error in sql query");
} 
else {
        echo ("Registration succesful!");
}
?>
