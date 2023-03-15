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
                <p class="fs3 card-header">All Posts</p>

                <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="row">Cover</th>
                                <th scope="row">Title</th>
                                <th scope="row">Date</th>
                                <th scope="row">options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM posts WHERE userid = '$id' ORDER BY id DESC LIMIT 100";
                                $query = mysqli_query($connectDb,$sql);
                                while ($row = mysqli_fetch_assoc($query)) {
                            ?>
                                <tr>
                                    <td><img src="../assets/img/uploads/<?php echo $row['cover'] ?>" width="50" alt="cover"></td>
                                    <td><?php echo $row['title'] ?></td>
                                    <td><?php echo $row['created_at'] ?></td>
                                    <td>
                                        <a href="edit-post?post=<?php echo $row['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <!-- <a 
                                            onclick="return confirm('Are you sure you want to delete this record, once deleted, it cannot be gotten back')"
                                            href="../assets/config/del_post?del=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a> -->

                                                                                <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Delete
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                           <h3 class="text-danger"> Are you sure you want to delete this record</h3>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <a 
                                            onclick="return confirm('Are you sure you want to delete this record, once deleted, it cannot be gotten back')"
                                            href="../assets/config/del_post?del=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>

                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </form>
    </div>


    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>