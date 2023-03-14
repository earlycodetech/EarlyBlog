<?php
    require "../assets/includes/sessions.inc.php";
    require "../assets/config/dbcon.php";
    authGuard();


    $id = $_SESSION['user'];

    $sql = "SELECT * FROM users WHERE id = '$id' ";
    $query = mysqli_query($connectDb, $sql);
    
    $user = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Meta Redirect to logout users after 30 minutes of inactivity -->
    <meta http-equiv="refresh" content="900; url=../assets/config/logout">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <?php include_once "../assets/includes/app_nav.inc.php"; ?>
    <div class="container my-3">
        <?php  echo errorMessage(); echo successMessage(); ?>
            <form class="card my-3" method="POST" action="../assets/config/new_post.php" enctype="multipart/form-data">
                <p class="fs3 card-header">Add a New Post</p>

                <div class="card-body">
                    <label for="">Cover Image</label>
                    <input type="file" name="file" accept="image/*" class="form-control mb-3" required>
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control mb-3" required>

                    <label for="">Post</label>
                    <textarea name="post" id="editor" class="form-control"></textarea>

                    <button class="btn btn-primary my-4" name="new-post">Add New Post</button>
                </div>
            </form>
    </div>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

</body>
</html>