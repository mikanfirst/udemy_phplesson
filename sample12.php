<!-- if構文 -->
<?php
// $time = 8;
date_default_timezone_set('Asia/Tokyo');
$time = date('G');
?>

<?php if ($time < 9): ?>
    <p>* 営業時間外です</p>
<?php else: ?>
    <p>ようこそ</p>
<?php endif; ?>



<?php
$s = 'アイウエオ';
if ($s): // $ !== 0 
    echo '$sには文字が入っています';
endif;
?>

<?php
$x = 0;
if (!$x): // $x === 0
    echo '$xは0です';
endif;
?>

