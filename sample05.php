<?php
$today = new DateTime();
$today->setTimezone(new DateTimeZone('Asia/Tokyo'));
echo '現在は' . $today->format('G時 i分 s秒') . ' です';
?>

<!-- オブジェクト指向 -->
＜構造化プログラム＞と＜オブジェクト指向（現在の一般的な考え方）＞
①先にオブジェクトを作る宣言をする = 二行目　「日付を司るオブジェクトを作りたいよー」と宣言している
②メソッドを準備 = 4行目 メソッドを使う時は「->」で繋ぐ。




