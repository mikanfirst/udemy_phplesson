<?php

// $time = time();
$time = strtotime('+0 day');
echo $time . '<br>';


$day = date('n/j(D)', $time); 
echo $day . '3行目からfor構文です。<br>';
?>

<?php
for($i=0; $i<366; $i++):
    // 15行目の記述だた同じ日付が365日並ぶだけ
    // $time = strtotime('+0 day'); 
    $time = strtotime("+$i day");
    $day = date('n/j(D)', $time);
    echo $day . '<br>';
endfor;
?>

ダブクォーテーションとシングルクォーテーションの使い分け
