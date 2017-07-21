<?php
require 'connection.php';
$sqlUpdate = $con->query('UPDATE Coupons SET Used = 1,UsedWhen = NOW() WHERE CouponNumber = 22');
mail("christoperbhall@gmail.com", "", "Queen Day Coupon Used!");

?>
