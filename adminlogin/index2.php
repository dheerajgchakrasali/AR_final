<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Amount</title>
	<link rel="stylesheet" type="text/css" href="../Style/login_style.css">
	<link rel="stylesheet" href="../Style/rest_list_style.css">
  <style>
    form {
			/*display: flex;
			flex-direction: column;
			align-items: center;*/

			display: contents;
			justify-content: space-between;
		}

		input {
			margin-bottom: 10px;
		}
  </style>
</head>
<body>

<header>
          <div class="header">
            <div class="container">
              <section class="logo">
                  <h2>Restaurents Menu Edit</h2>
              </section>

              <nav>
                  <ul>
                      <?php  if (isset($_SESSION['username'])) : ?>
                      <li><p>Welcome<strong><?php echo $_SESSION['username']; ?></strong></p></li>
                      <li><p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p></li>
                      <?php endif ?>
                  </ul>
              </nav>
            </div>
        </div>
      </header>

<h1> ENTER THE FOOD NAME AND AMOUNT OF RESTAURENT 2 <h1>

	<!--<section>
		<div class="image-container">
		<a href="./rest_page/page1.html">
			<img src="./assets/page1img.jpeg" alt="page1 image">
		</a>
		<div class="text">Restaurent 1</div>
		</div>
		</section>

		<section>
		<div class="image-container">
		<a href="./rest_page/page2.html">
			<img src="./assets/page2img.jpeg" alt="page2 image">
		</a>
		<div class="text">Restaurent 2</div>
		</div>
		</section>

		<section>
		<div class="image-container">
		<a href="./rest_page/page2.html">
			<img src="./assets/page3img.jpeg" alt="page3 image">
		</a>
		<div class="text">Restaurent 3</div>
		</div>
	</section>-->

   <form action="submit2.php" method="post">
		<label for="food1">Food 1:</label>
		<input type="text" name="food1" required>
		<label for="amount1">Amount:</label>
		<input type="number" name="amount1" required>
		<br>
		<label for="food2">Food 2:</label>
		<input type="text" name="food2" required>
		<label for="amount2">Amount:</label>
		<input type="number" name="amount2" required>
		<br>
		<label for="food3">Food 3:</label>
		<input type="text" name="food3" required>
		<label for="amount3">Amount:</label>
		<input type="number" name="amount3" required>
		<br>
		<label for="food4">Food 4:</label>
		<input type="text" name="food4" required>
		<label for="amount4">Amount:</label>
		<input type="number" name="amount4" required>
		<br>
		<label for="food5">Food 5:</label>
		<input type="text" name="food5" required>
		<label for="amount5">Amount:</label>
		<input type="number" name="amount5" required>
		<br>
		<input type="submit" value="Submit">
	</form>


<div class="<content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?> 
</div>

</body>
</html>