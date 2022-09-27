<?php
$file = file_get_contents('feed.json');
$json = json_decode($file);

// echo $json->items[2]->title;
foreach ($json->items as $item):
?>
<!-- .タイトル<br> -->
・<a href="<?php echo $item->url; ?>"><?php echo $item->title; ?><br>
<?php
endforeach;
?>