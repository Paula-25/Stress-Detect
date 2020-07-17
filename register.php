<!--My StyleSheet-->
<link rel="stylesheet" href="assets/css/styler.css" type="text/css">

<?php
$email = $_POST['user'];

//checking connection
$stress-detect= 
mysqli_connect("x40p5pp7n9rowyv6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "rd5q6ogkv51a0vqy", "raxbhv9xwycl28ep","ong2tttua61e8vuq"
) or 
    die('Error connecting to MySQL server');


//execute sql query
$result=
mysqli_query($stress-detect, "insert into register values('$email')");

//check query execution
if (!$result)
{
    die ("Error in sql query");
} 
else {
        echo ("Registration succesful!");
}
?>
