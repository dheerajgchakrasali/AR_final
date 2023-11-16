<?php
// Replace the values in the next line with your database credentials
$conn = mysqli_connect('localhost', 'root', '', 'project');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select data from food_data table
$sql = "SELECT * FROM food_data3";
$result = mysqli_query($conn, $sql);

// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    /*echo "<table>";
    echo "<tr><th>ID</th><th>Food</th><th>Amount</th></tr>";*/
    while($row = mysqli_fetch_assoc($result)) {
        /*echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["food1"] . "</td>";
        echo "<td>" . $row["amount1"] . "</td>";*/
        $price1 = $row["amount1"];
        /*echo "</tr>";
        echo "<tr>";
        echo "<td></td>";
        echo "<td>" . $row["food2"] . "</td>";
        echo "<td>" . $row["amount2"] . "</td>";*/
        $price2 = $row["amount2"];
       /* echo "</tr>";
        echo "<tr>";
        echo "<td></td>";
        echo "<td>" . $row["food3"] . "</td>";
        echo "<td>" . $row["amount3"] . "</td>";*/
        $price3 = $row["amount3"];
        /*echo "</tr>";
        echo "<tr>";
        echo "<td></td>";
        echo "<td>" . $row["food4"] . "</td>";
        echo "<td>" . $row["amount4"] . "</td>";*/
        $price4 = $row["amount4"];
        /*echo "</tr>";
        echo "<tr>";
        echo "<td></td>";
        echo "<td>" . $row["food5"] . "</td>";
        echo "<td>" . $row["amount5"] . "</td>";*/
        $price5 = $row["amount5"];
        //echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Restaurent 1</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../Style/ar_styles.css">

    <script src="https://unpkg.com/focus-visible@5.0.2/dist/focus-visible.js" defer></script>

  </head> 
<body>
  <div id="card">
    <model-viewer src="../assets/fast-food.glb"
                  ios-src=""
                  poster=""
                  alt="A 3D model of Pasta"
                  shadow-intensity="1"
                  camera-controls
                  auto-rotate ar>
    </model-viewer>
    <section class="attribution">
      <span>
        <h1>WRAP</h1>
        <span style="font-size: larger; font-weight: bold;">₹<?php echo $price1 ?></span>
      </span>
      <button onclick="document.getElementById('id01').style.display='block'" class="btn"><img src="../assets/info.png" alt="buttonpng" border="0" /></button>
    </section>
  </div>

  <div id="card">
    <model-viewer src="../assets/cup_of_cappuccino.glb"
                  ios-src=""
                  poster=""
                  alt="A 3D model of Pasta"
                  shadow-intensity="1"
                  camera-controls
                  auto-rotate ar>
    </model-viewer>
    <section class="attribution">
      <span>
        <h1>CAPPUCCINO</h1>
        <span style="font-size: larger; font-weight: bold;">₹<?php echo $price2 ?></span>
      </span>
      <button onclick="document.getElementById('id02').style.display='block'" class="btn"><img src="../assets/info.png" alt="buttonpng" border="0" /></button>
    </section>
  </div>
  
  <div id="card">
    <model-viewer src="../assets/fast_food_set.glb"
                  ios-src=""
                  poster=""
                  alt="A 3D model of Pasta"
                  shadow-intensity="1"
                  camera-controls
                  auto-rotate ar>
    </model-viewer>
    <section class="attribution">
      <span>
        <h1>borgir combo</h1>
        <span style="font-size: larger; font-weight: bold;">₹<?php echo $price3 ?></span>
      </span>
      <button onclick="document.getElementById('id03').style.display='block'" class="btn"><img src="../assets/info.png" alt="buttonpng" border="0" /></button>
    </section>
  </div>
  
  <div id="card">
    <model-viewer src="../assets/uploads_files_2465920_burger_merged.glb"
                  ios-src=""
                  poster=""
                  alt="A 3D model of Pasta"
                  shadow-intensity="1"
                  camera-controls
                  auto-rotate ar>
    </model-viewer>
    <section class="attribution">
      <span>
        <h1>borgir and fries</h1>
        <span style="font-size: larger; font-weight: bold;">₹<?php echo $price4 ?></span>
      </span>
      <button onclick="document.getElementById('id04').style.display='block'" class="btn"><img src="../assets/info.png" alt="buttonpng" border="0" /></button>
    </section>
  </div>
  
  <div id="card">
    <model-viewer src="../assets/fast-food-sets.glb"
                  ios-src=""
                  poster=""
                  alt="A 3D model of Pasta"
                  shadow-intensity="1"
                  camera-controls
                  auto-rotate ar>
    </model-viewer>
    <section class="attribution">
      <span>
        <h1>WRAP</h1>
        <span style="font-size: larger; font-weight: bold;">₹<?php echo $price5 ?></span>
      </span>
      <button onclick="document.getElementById('id05').style.display='block'" class="btn"><img src="../assets/info.png" alt="buttonpng" border="0" /></button>
    </section>
  </div>

  <footer>
    <span>This is The blah Hotel COME. EAT. GO.</span>
    <span>Eat well Be Well</span>
  </footer>

  <div id="id01" class="modal">
	  <div class="modal-content">
	    <div class="container">
	      <span onclick="document.getElementById('id01').style.display='none'" class="closebtn">&times;</span>
	      <p>A wrap can vary widely depending on personal preference, 
          but common components include a tortilla or lettuce leaf, 
          a protein such as chicken or tofu, vegetables such as lettuce, 
          tomatoes, and onions, and a sauce or condiment such as mayo, hummus, or salsa.</p>

	      <p>The main specialties of a wrap is its versatility - 
          it can be filled with a wide range of ingredients and flavors, 
          making it a great option for a quick and customizable meal. 
          Additionally, wraps can be a healthier alternative to traditional sandwich bread, 
          especially if made with whole grain tortillas or lettuce leaves.</p>
	    </div>
	  </div>
	</div>
	
	<div id="id02" class="modal">
	  <div class="modal-content">
	    <div class="container">
	      <span onclick="document.getElementById('id02').style.display='none'" class="closebtn">&times;</span>
	      <p>Cappuccino is traditionally served in a small, ceramic cup and is a popular coffee drink enjoyed around the world. 
          The milk used in cappuccinos can be whole milk, skim milk, or any milk of your choice, 
          and the foam can be made with a cappuccino machine or by using a frother. 
          Cappuccinos can also be decorated with latte art, which is created by pouring steamed milk into the espresso in a specific pattern.</p>
          
	      <p>One of the main specialties of cappuccino is its balance of flavors and textures. 
          The bitterness of the espresso is offset by the sweetness of the milk, while the foam provides a creamy, velvety texture. 
          Cappuccinos are also a versatile drink that can be enjoyed on their own or paired with a variety of pastries and desserts. 
          Additionally, the frothy foam layer on top can be a canvas for creative latte art designs.</p>
	    </div>
	  </div>
	</div>
  
  <div id="id03" class="modal">
	  <div class="modal-content">
	    <div class="container">
	      <span onclick="document.getElementById('id03').style.display='none'" class="closebtn">&times;</span>
	      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
	      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
	      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
	       Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	      <p>3333</p>
	    </div>
	  </div>
	</div>
	
	<div id="id04" class="modal">
	  <div class="modal-content">
	    <div class="container">
	      <span onclick="document.getElementById('id04').style.display='none'" class="closebtn">&times;</span>
	      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
	      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
	      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
	       Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	      <p>4444</p>
	    </div>
	  </div>
	</div>

  <div id="id05" class="modal">
	  <div class="modal-content">
	    <div class="container">
	      <span onclick="document.getElementById('id05').style.display='none'" class="closebtn">&times;</span>
	      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
	      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
	      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
	       Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	      <p>5555</p>
	    </div>
	  </div>
	</div>
	
	<div id="id06" class="modal">
	  <div class="modal-content">
	    <div class="container">
	      <span onclick="document.getElementById('id06').style.display='none'" class="closebtn">&times;</span>
	      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
	      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
	      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
	       Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	      <p>6666</p>
	    </div>
	  </div>
	</div>

  <script type="module"
      src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js">
  </script>
</body>
</html>