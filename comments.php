<?php
$comment = $connect->query(/** @lang text */ "SELECT * FROM psaradise.comment ORDER BY date DESC");
$comment = $comment->fetchAll(PDO::FETCH_ASSOC);

if($comment){

    foreach ($comment as $val){
        ?>
        <ul class="hr"><?="<u><li class='date'>{$val['date']} </li></u>
        <strong><li class='username'>{$val['username']} ></li></strong>
        <i><li class='comment'>{$val['comment']}</li></i>" ?></ul>
    <? }}else {?>
    <h2 class="empty">Empty &#x1f613;</h2>
<?}?>
