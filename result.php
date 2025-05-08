<?php
	$Age = $_POST['Age'];
    $select = $_POST['day'];
    $day = select.options[select.selectedIndex].value;

    if ($age <= 5 || $age >= 95) {
        $Display="Entry is free";
    }
    else if ($age >= 12 && $age <= 21) {
       $Display="You get a discount";
    }
    else if ($day === "Tuesday" || $day === "Thursday") {
        $Display="You get a discount";
    }
    else {
        $Display="Pay regular price";
    }
?>
<h3>Results:</h3>
    <?php echo "$Display" ?>.