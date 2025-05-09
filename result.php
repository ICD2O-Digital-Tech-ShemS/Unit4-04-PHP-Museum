<?php
$age = $_POST['age'];
$day = $_POST['day'];

// Proper syntax: entire condition inside one set of parentheses
if ((($age >= 12) && ($age <= 21)) || ($day == "Tuesday") || ($day == "Thursday")) {
    echo "You get a discount";
} else {
    echo "Pay regular price";
}
?>
<h3>Results:</h3>
<?php echo "$Final" ?>