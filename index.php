<!DOCTYPE html>
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
    <!-- PHP echo to print HTML header -->
    <?php 
      echo "<h3>Fill out form</h3>";
    ?>
    <!-- Form to get age and day from the user -->
    <form action="result.php" method="post" target="result">
      <h3>Enter Age</h3>
      <div>
        <input type="number" id = "age" step="any" name="age" placeholder="Enter Age">
      </div>
      <br>
      <select name="day" id="day">
        <option value="Sunday">Sunday</option>
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>
      </select>
      <br><br>
      <input type="submit" value="Enter">
    </form>

    <iframe id="result" name="result" style="width:100%; height:100px; border:none;"></iframe>
  </body>
</html>
