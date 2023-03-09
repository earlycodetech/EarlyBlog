<?php 
    require_once "assets/includes/sessions.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Early Blog</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.css">
</head>

<body>
    <!-- NAVBAR -->
    <section>
    <?php 
        include_once "assets/includes/nav.inc.php";
      ?>
    </section>

    <!-- Register Form -->
    <section>
        <div class="container mt-5">
            <form action="assets/config/login.con.php" method="POST" class="card mx-auto shadow" style="max-width: 600px;">
            
        
            <div class="p-2">
                <?php echo successMessage(); echo errorMessage(); ?>
            </div>

            <h5 class="card-header bg-white">Login to your Account</h5>
                <div class="row card-body">
                    <div class="col-md-6 mb-2">
                        <label  class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control" id="" required>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label  class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control" id="" required>
                    </div>

                    <div class="col-12 my-3">
                        <button class="btn btn-dark" name="login">
                            Login
                        </button>
                    </div>
                </div>
            </form>
            
        </div>
    </section>
</body>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</html>