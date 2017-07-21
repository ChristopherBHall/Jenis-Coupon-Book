<?php
require 'connection.php';
$sqlUpdate = $con->query('UPDATE Coupons SET Used = 1,UsedWhen = NOW() WHERE CouponNumber = 7');
mail("christoperbhall@gmail.com", "", "Do One Chore Coupon Used!");
?>
