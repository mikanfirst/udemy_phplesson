<?php
// date = 時刻。日付を扱うファンクション
// ''クォテーション記号は不要！
date_default_timezone_set('Asia/Tokyo');
echo date('G時 i分 s秒');


// 文字列連結 '' の間に「.」をつないで　ファンクションと合わせて表示させる
echo '現在は、' . date('G時 i分 s秒') . 'です';
?>