<?php
require 'connection.php';
$sqlUpdate = $con->query('UPDATE Coupons SET Used = 1,UsedWhen = NOW() WHERE CouponNumber = 18');
mail("christoperbhall@gmail.com", "", "Pizza Coupon Used!");
?>
