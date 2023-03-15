<?php 
    session_start();
    require "dbcon.php";

    if (!isset($_GET['del'])) {
        //1. Redirect the users if they don't click our button
            $_SESSION['error_msg'] = "Try again!";
            header("Location: ../../app/new-post");
    }else{
        $id = $_GET['del'];

        $sql = "DELETE FROM posts WHERE id = '$id'";
        $query = mysqli_query($connectDb, $sql);


        if (!$query) {
            $_SESSION['error_msg'] = "Oops, Something went wrong!";
            header("Location: ../../app/all-posts");
        }else{
            $_SESSION['success_msg'] = "Post has been deleted!";
            header("Location: ../../app/all-posts");
        }
    }