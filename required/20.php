<?php
require 'connection.php';
$sqlUpdate = $con->query('UPDATE Coupons SET Used = 1,UsedWhen = NOW() WHERE CouponNumber = 20');
mail("christoperbhall@gmail.com", "", "Dessert Date Coupon Used!");

?>
