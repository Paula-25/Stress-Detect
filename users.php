<!--My StyleSheet-->
<link rel="stylesheet" href="assets/css/styler.css" type="text/css">

<?php
$user = $_POST['email'];

//checking connection
$connection= 
mysqli_connect("x40p5pp7n9rowyv6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "rd5q6ogkv51a0vqy", "raxbhv9xwycl28ep","ong2tttua61e8vuq"
) or 
    die('Error connecting to MySQL server');


//execute sql query
$result=
mysqli_query($connection, "insert into users values('$user')");

//check query execution
if (!$result)
{
    die ("Error in sql query");
} 
else {
        echo ("Registration succesful!");
}
?>
