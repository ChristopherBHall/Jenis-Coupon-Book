<?php
require 'connection.php';
$sqlUpdate = $con->query('UPDATE Coupons SET Used = 1,UsedWhen = NOW() WHERE CouponNumber = 21');
mail("christoperbhall@gmail.com", "", "Clean House Coupon Used!");

?>
