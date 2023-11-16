<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="./Style/login_style.css">
</head>
<body>
 <!-- <div class="header">
  	<h2>Login</h2>
	<section>
	  <a href="./adminlogin/">ADMIN</a>
	</section>
	<nav>
		<ul>

			<li><p> <a href="./adminlogin/">ADMIN</a> </p></li>
		</ul>
	</nav>
  </div>-->

  <header>
  <div class="header">
    <div class="container">
      <section>
          <h2>Login</h2>
      </section>

      <nav>
          <ul>
		  	<li><p> <a href="./adminlogin/" style="color: gainsboro;">ADMIN</a> </p></li>
          </ul>
      </nav>
    </div>
</div>
</header>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>