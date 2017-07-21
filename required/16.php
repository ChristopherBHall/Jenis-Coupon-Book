<?php
require 'connection.php';
$sqlUpdate = $con->query('UPDATE Coupons SET Used = 1,UsedWhen = NOW() WHERE CouponNumber = 16');
mail("christoperbhall@gmail.com", "", "Buy me a Thing Coupon Used!");

?>
