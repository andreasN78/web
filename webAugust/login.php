<?php
    require_once 'Functions.php';
	include 'connection.php';

if(isset($_POST['username'])) {
    //καλουμε την συναρτηση login me ta post username kai password
    $message = login($_POST['username'], $_POST['password'], $conn);
    echo $message;
    if($message == "Success"){
        header("Location:adminlogin.php");
        session_start();
        $_SESSION["usernameStored"] =$_POST['username'];
    }
}
$conn->close()

?>

<style>
		.login-form {
			width: 300px;
			margin: 0 auto;
			font-family: Tahoma, Geneva, sans-serif;
		}
		.login-form h1 {
			text-align: center;
			color: #4d4d4d;
			font-size: 24px;
			padding: 20px 0 20px 0;
		}
		.login-form input[type="password"],
		.login-form input[type="text"] {
			width: 100%;
			padding: 15px;
			border: 1px solid #dddddd;
			margin-bottom: 15px;
			box-sizing:border-box;
		}
		.login-form input[type="submit"] {
			width: 100%;
			padding: 15px;
			background-color: #535b63;
			border: 0;
			box-sizing: border-box;
			cursor: pointer;
			font-weight: bold;
			color: #ffffff;
		}
		</style>
        
<div class="login-form">
			<h1>Admin Login Form</h1>
			<form action="login.php" method="post">
				<input type="text" name="username" placeholder="Username" required>
				<input type="password" name="password" placeholder="Password" required>
				<input type="submit">
			</form>
</div>




