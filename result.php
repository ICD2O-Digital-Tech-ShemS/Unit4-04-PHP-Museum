<?php
$age = $_POST['Age'];
$day = $_POST['day'];


    if ($age >= 12 && $age <= 21) {
    echo "You get a discount";
} 
else if ($day == "Tuesday" || $day == "Thursday") {
    echo "You get a discount";
}
 else {
    echo "Pay regular price";
}
?>