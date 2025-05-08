<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Shem Irekpita">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Museum</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h3>Fill out form</h3>";
		?>
		<!-- form to get the base and height from the user -->
    <form action="./result.php" method="post" target="result">
       <h3>Enter Age</h3>
  <div class="mdl-textfield mdl-js-textfield">
    <input type="number" step="any" id="age" placeholder="Enter Age" />
  </div>

  <br><br>
  <select name="day" id="day">
    <option value="Sunday">Sunday</option>
    <option value="Monday">Monday</option>
    <option value="Tuesday">Tuesday</option>
    <option value="Wednesday">Wednesday</option>
    <option value="Thursday">Thursday</option>
    <option value="Friday">Friday</option>
    <option value="Saturday">Saturday</option>
  </select>
		</form>

			<iframe id="result" name="result">
          <div id="$Display"></div>
	    </iframe>
	</body>
</html>
