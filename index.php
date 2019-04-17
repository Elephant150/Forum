<?php
$connect = new PDO("mysql:host = mysql.zzz.com.ua; dbname = psaradise; charset = utf8", 'psaradise', 'Psaradise1');
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $comment = $_POST['comment'];
    $date = date('Y-m-d H:i:s');
    $query = $connect->query(/** @lang text */ "INSERT INTO psaradise.comment (username, comment, date) VALUES ('$username', '$comment', '$date')");
}
if ((!empty($_POST['username'])))  {
    header('Location:http://forum.psaradise.kl.com.ua/');
}
//header("Location: http://forum.psaradise.kl.com.ua/");
//exit;
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Forum</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md">
        </div>
        <div class="col-md-8">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Enter your message :)</label>
                    <input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <textarea name="comment" class="form-control" rows="3" placeholder="Message..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Send</button>
            </form>
            <hr>
            <h1>Message</h1>
        </div>
        <div class="col-md">
        </div>
    </div>
</div>
<script src = scripts.js></script>
</body>
</html>