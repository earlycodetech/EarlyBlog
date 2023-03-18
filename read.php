<?php 
  require "assets/config/dbcon.php";
  require "assets/includes/sessions.inc.php";


  $post = $_GET['post'];
  if (!isset($_GET['post'])) {
    header('Location: index');
  }
  else{
    $sql = "SELECT * FROM posts WHERE id = ?";
    $stmt = mysqli_stmt_init($connectDb);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,"s",$post);

    $execute = mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) < 1) {
        $_SESSION['error_msg'] = "This Post does not exist";
        header('Location: index');
    }else{
        $row = mysqli_fetch_assoc($result);
    }

  }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Early Blog</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.css">
</head>

<body>
    <!-- NAVBAR -->
    <section>
      <?php 
        require "assets/includes/nav.inc.php";
      ?>
    </section>


    <section class="container my-4">

        <p class="blog-title fs-1 fw-bold">
            <?php echo $row['title']; ?>
        </p>

        <p>
            Published By: <?php echo $row['author']; ?>
        </p>
        <p>
            Date: 
            <?php 
                $date = date_create($row['created_at']);
                echo date_format($date, "jS M. Y h:i a"); 
            ?>
        </p>
        <img src="assets/img/uploads/<?php echo $row['cover']; ?>" class="big-blog" alt="">


        <div class="my-4 blog-content">
         <?php echo $row['post']; ?>
        </div>
    </section>
</body>

</html>