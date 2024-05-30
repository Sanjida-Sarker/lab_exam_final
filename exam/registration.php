<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/styles.css" />
</head>
<body>
<?php
require('dbconnect.php');
if (isset($_REQUEST['name'])){
	$username = ($_REQUEST['name']);
        $email = ($_REQUEST['email']);
        $password =($_REQUEST['pass']);
        $l_date = date("Y-m-d H:i:s");

        $query = "INSERT INTO users (username, email,password,login_date) VALUES ('$username','$email', '".md5($password)."',  '$l_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'> <h3>Your registraction done successfully.</h3> <br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{

?>
<div class="reg_form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="name" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="pass" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>
