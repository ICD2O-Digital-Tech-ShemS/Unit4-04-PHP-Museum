<?php
$age = $_POST['age'];
$day = $_POST['day'];

// Proper syntax: entire condition inside one set of parentheses
if (($age <= 5) && ($age >= 95)) {
    echo "It is free";
}
    else {
    echo "Pay regular price";
}
?>
<h3>Results:</h3>
<?php echo "$Final" ?>