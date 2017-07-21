<?php
require 'connection.php';
$sqlUpdate = $con->query('UPDATE Coupons SET Used = 1,UsedWhen = NOW() WHERE CouponNumber = 25');
mail("christoperbhall@gmail.com", "", "Chris Makeover Coupon Used!");
?>
