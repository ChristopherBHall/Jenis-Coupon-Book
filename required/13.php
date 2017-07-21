<?php
require 'connection.php';
$sqlUpdate = $con->query('UPDATE Coupons SET Used = 1,UsedWhen = NOW() WHERE CouponNumber = 13');
mail("christoperbhall@gmail.com", "", "Breakfest In Bed Coupon Used!");

?>
