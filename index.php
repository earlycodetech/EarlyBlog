<?php 
  require "assets/config/dbcon.php";
  require "assets/includes/sessions.inc.php";
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

    <div class="my-3 container">
      <?php echo errorMessage(); echo successMessage(); ?>
    </div>

    <section class="container my-4">
      <div class="row">
        <?php 
          $sql = "SELECT * FROM posts ORDER BY id DESC";
          $query = mysqli_query($connectDb, $sql);
          while($row = mysqli_fetch_assoc($query)){
        ?>
        <div class="col-lg-3 col-md-4 mb-4">
          <div class="card border-0 shadow h-100">
              <img src="assets/img/uploads/<?php echo $row['cover'] ?>" alt="" class="card-img-top index-blog">

              <p class="blog-title text-center"><?php echo $row['title'] ?></p>

              <div class="text-center my-3 mt-auto">
                <a href="read?post=<?php echo $row['id'] ?>" class="btn btn-outline-secondary">Read <i class="fa fa-book-open"></i></a>
              </div>
          </div>

        </div>
        <?php } ?>
      </div>
    </section>
</body>

</html>