<?php
require('intax.php'); //require = 必要としている
$price = 150;
$price_tax = intax($price);
echo $price_tax;
?>

<!-- 別ページでファンクションを呼び出す -->
<!-- 自作のファンクションをこのページにまとめて作っておき、各ページで必要な時に呼び出すことが可能 -->