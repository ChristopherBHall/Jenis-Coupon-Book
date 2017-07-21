<?php
require 'connection.php';
$sqlUpdate = $con->query('UPDATE Coupons SET Used = 1,UsedWhen = NOW() WHERE CouponNumber = 26');
mail("christoperbhall@gmail.com", "", "Co-op GAme Coupon Used!");
?>
