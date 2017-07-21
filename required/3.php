<?php
require 'connection.php';
$sqlUpdate = $con->query('UPDATE Coupons SET Used = 1,UsedWhen = NOW() WHERE CouponNumber = 3');
mail("christoperbhall@gmail.com", "", "Make Dinner Coupon Used!");
?>
