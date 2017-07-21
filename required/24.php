<?php
require 'connection.php';
$sqlUpdate = $con->query('UPDATE Coupons SET Used = 1,UsedWhen = NOW() WHERE CouponNumber = 24');
mail("christoperbhall@gmail.com", "", "Flowers  Coupon Used!");
?>
