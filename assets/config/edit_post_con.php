<?php 
    session_start();
    require "dbcon.php";

    if (!isset($_POST['edit-post'])) {
        //1. Redirect the users if they don't click our button
            $_SESSION['error_msg'] = "Please create an account to continue!";
            header("Location: ../../app/all-posts");
    }else{
        $title = $_POST['title'];
        $post = $_POST['post'];
        $postId = $_GET['update'];

        $sql = "UPDATE posts SET title = ?, post = ? WHERE id = '$postId'";
        $stmt = mysqli_stmt_init($connectDb);
        mysqli_stmt_prepare($stmt,$sql);
        mysqli_stmt_bind_param($stmt,"ss",$title,$post);

        $execute = mysqli_stmt_execute($stmt);

        if (!$execute) {
            $_SESSION['error_msg'] = "Oops, Something went wrong!";
            header("Location: ../../app/all-posts");
        }else{
            $_SESSION['success_msg'] = "Post has been updated!";
            header("Location: ../../app/all-posts");
        }
    }