<?php
$connect = new PDO("mysql:host = mysql.zzz.com.ua; dbname = psaradise; charset = utf8", 'psaradise', 'Psaradise1');
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $comment = $_POST['comment'];
    $date = date('Y-m-d H:i:s');
    $query = $connect->query(/** @lang text */ "INSERT INTO psaradise.comment (username, comment, date) VALUES ('$username', '$comment', '$date')");
}
if ((!empty($_POST['username'])))  {
    header('Location:http://chat.psaradise.kl.com.ua/');
}
?>