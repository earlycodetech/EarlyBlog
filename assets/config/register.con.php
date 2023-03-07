<?php 
    session_start();
    
    if (!isset($_POST['register'])) {
        //1. Redirect the users if they don't click our button
            $_SESSION['error_msg'] = "Please create an account to continue!";
            header("Location: ../../register");
    }else{
        // 2. Collect the data from the form
            $fullName = trim($_POST['full_name']);
            $email = trim($_POST['email']);
            $dob =trim($_POST['dob']);
            $phone = trim($_POST['phone']);
            $password = trim($_POST['password']);
            $password_confirm = trim($_POST['password_confirm']);

        //3. Build Constraint to make sure they provide correct data

        #check if any of the value is empty
        if ($fullName === ""  || $email === "" || $dob === "" || $phone === "" || $password === "" || $password_confirm === ""  ) {
            $_SESSION['error_msg'] = "Fields cannot be empty!";
            header("Location: ../../register");
        }
        #check if the email is valid
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $_SESSION['error_msg'] = "Invalid Email!";
            header("Location: ../../register");
        }

        #check the password length
        elseif (strlen($password) < 8){
            $_SESSION['error_msg'] = "Password too short!";
            header("Location: ../../register");
        }
        #check the password and confirm password
        elseif ($password !== $password_confirm){
            $_SESSION['error_msg'] = "Passwords do not match!";
            header("Location: ../../register");
        }

        else{
            #database
            $_SESSION['success_msg'] = "Account has been created!";
            header("Location: ../../register");
        }
    }
