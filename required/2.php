<?php
require 'connection.php';
$sqlUpdate = $con->query('UPDATE Coupons SET Used = 1,UsedWhen = NOW() WHERE CouponNumber = 2');
mail("christoperbhall@gmail.com", "", "Make Dinner Coupon Used!");
?>
