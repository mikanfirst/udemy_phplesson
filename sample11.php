<!-- 連想配列 -->

<?php
$fruits = [
    'apple' => 'りんご',
    'grape' => 'ぶどう',
    'lemon' => 'れもん',
    'tomamo' => 'トマト',
    'peach' => 'もも',
];
echo $fruits['lemon'];
?>

<dl>
    <?php foreach ($fruits as $english => $japanese): ?>
        <!-- <dt>apple</dt>
        <dd>りんご</dd> -->
        <dt><?php echo $english; ?></dt>
        <dd><?php echo $japanese; ?></dd>
    <?php endforeach; ?>

</dl>

<?php foreach ($fruits as $english => $japanese): ?>

    配列を指定し「as」で繋ぐ
    as移行は変数を指定↓ 変数の中と同じ形
        'apple' => 'りんご',
        'grape' => 'ぶどう',
        'lemon' => 'れもん',
        'tomamo' => 'トマト',
        'peach' => 'もも',
    