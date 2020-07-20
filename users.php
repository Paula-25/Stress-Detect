<!--My StyleSheet-->
<link rel="stylesheet" href="assets/css/styler.css" type="text/css">

<?php
$email = $_POST['email'];

//checking connection
$connection= 
mysqli_connect("x40p5pp7n9rowyv6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "rd5q6ogkv51a0vqy", "raxbhv9xwycl28ep","ong2tttua61e8vuq"
) || 
    die('Error connecting to MySQL server');


if(isset($_POST)) {
    $email = $_POST['email'];

//execute sql query
$query = "INSERT INTO 'users' ('email') VALUES ('$email')";


//check query execution

if (!mysqli_query($connection, $query)) {

 die ("Error in sql query");
} 
else {
        echo "Registration succesful!" ;
    }

}

?>
