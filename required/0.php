<?php
require 'connection.php';
$sqlUpdate = $con->query('UPDATE Coupons SET Used = 1,UsedWhen = NOW() WHERE CouponNumber = 0');
mail("christoperbhall@gmail.com", "", "Watch a Movie Coupon Used!");
?>
