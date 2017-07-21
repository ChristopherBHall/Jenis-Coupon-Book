<?php
require 'connection.php';
$sqlUpdate = $con->query('UPDATE Coupons SET Used = 1,UsedWhen = NOW() WHERE CouponNumber = 11');
mail("christoperbhall@gmail.com", "", "Go Get a Specific Treat (close) Coupon Used!");

?>
