<?php
session_start();
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $mysqli = new mysqli("localhost", "root", "", "users");
    $result = $mysqli->query("SELECT * FROM userinfo WHERE USERNAME='$username' AND PASSWORD='$password'");
    if($result->num_rows == 1){
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    }
    else{
        $error = "Incorrect username or password";
    }
}
if(isset($_POST['signup'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $mysqli = new mysqli("localhost", "root", "", "users");
    $result = $mysqli->query("INSERT INTO userinfo VALUES('$username','$password');");
	
    // if($result->num_rows == 1){
    //     $_SESSION['username'] = $username;
    //     header("Location: dashboard.php");
    //     exit();
    // }
    // else{
    //     $error = "Incorrect username or password";
    // }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>Login Page</h1>
	<?php
	if(isset($error)){
	    echo "<p>$error</p>";
	}
	?>  
	<form method="post">
		<label>Username:</label>
		<input type="text" name="username"><br><br>
		<label>Password:</label>
		<input type="password" name="password"><br><br>
		<input type="submit" name="login" value="Login">
		<input type = "submit" name = "signup" onclick="fun()" value = "sign up">
		<script  type = "text/javascript">
			function fun(){
				alert(`Signed up!`);
			}
		</script>
	</form>
</body>
</html>