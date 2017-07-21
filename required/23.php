<?php
require 'connection.php';
$sqlUpdate = $con->query('UPDATE Coupons SET Used = 1,UsedWhen = NOW() WHERE CouponNumber = 23');
mail("christoperbhall@gmail.com", "", "Us Day Coupon Used!");

?>
