<?php
$flavors = $_POST["flavor"];
$cost = 0;

echo "<h4> Thank you for your order: $_POST[name] <br />";
echo 'Order Summary:';

foreach($flavors as $flavor){
    echo '<li>' . $flavor . '</li>';
    $cost += 3.50;
}

echo 'Order Total: $' . $cost;