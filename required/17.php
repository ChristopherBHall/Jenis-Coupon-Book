<?php
require 'connection.php';
$sqlUpdate = $con->query('UPDATE Coupons SET Used = 1,UsedWhen = NOW() WHERE CouponNumber = 17');
mail("christoperbhall@gmail.com", "", "Night Out Coupon Used!");

?>
