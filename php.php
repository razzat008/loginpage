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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  </head>
  <link rel="stylesheet" type="css" href="style.css"> 
<script src="https://use.fontawesome.com/7414becf10.js"></script>
  <script src="script.js"></script>
<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
      <a href="#"><img src="scool.jpg" width="120" height="100"></a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item">
        Home
      </a>

      <a class="navbar-item">
        Documentation
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          More
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
            About
          </a>
          <a class="navbar-item">
            Jobs
          </a>
          <a class="navbar-item">
            Contact
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            Report an issue
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light">
            Log in
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
    <section class="hero is-primary is-fullheight">
      <div class="hero-body"
    <div class="columns">
          <div class="column is-half is-offset-one-quarter">
            <form action="php.php" method="post">
              
            <div class="field">
  <p class="control has-icons-left has-icons-right">
    <input class="input is-warning" type="email" name="username" placeholder="Email">
    <span class="icon is-small is-left">
     <i class="fa-regular fa-envelope"></i>
   </span>
    <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
  </p>
</div>
<div class="field">
  <p class="control has-icons-left">
    <input class="input is-warning" type="password" name="password" placeholder="Password">
    <span class="icon is-small is-left">
      <i class="fas fa-lock"></i>
    </span>
  </p>
</div>
<div class="buttons">
  <button class="button is-light" name="signup">Sign Up</button>
  <button class="button is-dark name="login">Log In</button>
</div>
          </div>
      </div>
            </form>
    </div>
    </section>
  </body>
</html>
     
			function fun(){
				alert(`Signed up!`);
			}
		</script>
	</form>
</body>
</html>
