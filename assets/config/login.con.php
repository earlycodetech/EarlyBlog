<?php
    session_start();
    require "dbcon.php";

    if (!isset($_POST['login'])) {
        //1. Redirect the users if they don't click our button
            $_SESSION['error_msg'] = "Please create an account to continue!";
            header("Location: ../../register");
    }else{
        //2 . Collect data from the form
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        //3. Build Constraints to make sure they provide correct data

        #check if any of the value is empty
        if ($email === "" || $password === "" ) {
            $_SESSION['error_msg'] = "Fields cannot be empty!";
            header("Location: ../../login");
        }
         #check if the email is valid
         elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $_SESSION['error_msg'] = "Invalid Email!";
            header("Location: ../../login");
        }

        # Check if the user has an account with us
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = mysqli_stmt_init($connectDb);
        mysqli_stmt_prepare($stmt,$sql);
        mysqli_stmt_bind_param($stmt,"s",$email);

        $execute = mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        $numRows = mysqli_num_rows($result);

        #check if user does not have an email with us
        if ($numRows !== 1) {
            $_SESSION['error_msg'] = "Email does not exist!";
            header("Location: ../../login");
        }else{
            # This converts the returned data into an associative array with the columns
            # as the keys
            $row = mysqli_fetch_assoc($result);
            $returnedPassword = $row['passwords'];

            if (!password_verify($password, $returnedPassword)) {
                $_SESSION['error_msg'] = "Incorrect Password!";
                header("Location: ../../login");
            }else{
                /*============= Authorize the User ==================*/ 
                $_SESSION['user'] = $row['id'];
                $_SESSION['name'] = $row['full_name'];
                header("Location: ../../app/dashboard");
            }
        }
    }