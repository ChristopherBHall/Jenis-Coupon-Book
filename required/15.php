<?php
require 'connection.php';
$sqlUpdate = $con->query('UPDATE Coupons SET Used = 1,UsedWhen = NOW() WHERE CouponNumber = 15');
mail("christoperbhall@gmail.com", "", "fast Food Coupon Used!");

?>
