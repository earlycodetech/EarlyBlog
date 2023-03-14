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
            Welcome back <?php echo $user['full_name'];  ?>

            <div class="card my-3">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-3">
                            Full Name:
                        </div>
                        <div class="col-9"> <?php echo $user['full_name']; ?> </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-3">
                            Email:
                        </div>
                        <div class="col-9"><?php echo $user['email']; ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-3">
                            Date of Birth:
                        </div>
                        <div class="col-9"> <?php echo $user['dob']; ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-3">
                           Phone Number:
                        </div>
                        <div class="col-9"><?php echo $user['phone']; ?></div>
                    </div>
                </div>
            </div>
    </div>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>