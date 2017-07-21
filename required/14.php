<?php
require 'connection.php';
$sqlUpdate = $con->query('UPDATE Coupons SET Used = 1,UsedWhen = NOW() WHERE CouponNumber = 14');
mail("christoperbhall@gmail.com", "", "fast food Coupon Used!");
?>
