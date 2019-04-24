<?php include 'header.php';
include 'config.php';?>
<div class="container">
    <div class="row">
        <div class="col-md">
        </div>
        <div class="col-md-8">
            <form class="form" action="" method="POST">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Enter your message 🙃</label>
                    <input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <textarea name="comment" class="form-control" rows="3" placeholder="Message..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Send</button>
            </form>
<!--            <hr>-->
<!--            <u><strong>Message</strong></u>-->
<!--            <hr>-->
            <div class="blockMessage">
                <?php include 'comments.php';?>
            </div>
        </div>
        <div class="col-md">
        </div>
    </div>
</div>
<?php include 'footer.php'?>