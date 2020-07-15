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

<div class="adjust contact">       
            <h1>Stress-Detect</h1>
         <h2>Capture your face and lets tell you how much rest you need</h2>
        <p class="animate__animated animate__bounce"><b>COMING SOON!</b></p>
    </div>

    <div class="adjust contact-form">
        <form id="contact-form" method="POST" action="register.php">
            <input type="email" name="user_email" placeholder="Your Email" class="form-control" required>
            <br><br>
            <input type="submit" class="form-control submit" value="REGISTER">
        </form>
    </div>

    <div class="showcase-top" >
        <img src="assets/images/untitled-project (4).png"><hr>
        <img src="assets/images/untitled-project@2x (14).png">
    </div>