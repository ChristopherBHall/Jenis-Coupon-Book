<?php
require 'connection.php';
$sqlUpdate = $con->query('UPDATE Coupons SET Used = 1,UsedWhen = NOW() WHERE CouponNumber = 27');
mail("christoperbhall@gmail.com", "", "Wild Coupon Used!");
?>
