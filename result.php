<?php
$age = $_POST['age'];
$day = $_POST['day'];

// Proper syntax: entire condition inside one set of parentheses
if (($age <= 5) && ($age >= 95)) {
    echo "You get a discount";
}else if ($day == "Tuesday") || ($day == "Thursday") {
    echo "You get a discount";
}
 else {
    echo "Pay regular price";
}
?>
<h3>Results:</h3>
<?php echo "$Final" ?>