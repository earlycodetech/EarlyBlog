<?php 
    session_start();
    require "dbcon.php";

    if (!isset($_POST['new-post'])) {
        //1. Redirect the users if they don't click our button
            $_SESSION['error_msg'] = "Please create an account to continue!";
            header("Location: ../../app/new-post");
    }else{
        $id = $_SESSION['user'];
        $author = $_SESSION['name'];



        $title = $_POST['title'];
        $post = $_POST['post'];
        $file = $_FILES['file'];

        // 1. Collect the Values from the file
        $fileName = $file['name'];
        $fileTmpLoc = $file['tmp_name'];
        $fileError = $file['error'];
        $fileSize = $file['size'];

        // 2. Create an array of allowed files.
        $allowed = ['jpg', 'jpeg', 'gif', 'png', 'webp', 'jiff' ];

        // 3. Get the file extension
        $ext = explode('.',$fileName);
        $ext = end($ext);
        $ext = strtolower($ext);
        

        // 3. Check if the file is allowed
        if (!in_array($ext, $allowed)) {
            $_SESSION['error_msg'] = "Please upload either a 'jpg', 'jpeg', 'gif', 'png', 'webp', or 'jiff' file!";
            header("Location: ../../app/new-post");
        }
        
        // 4. Check if the file has errors
        elseif ($fileError != 0) {
            $_SESSION['error_msg'] = "Corrupted file!";
            header("Location: ../../app/new-post");
        }
        
        // 4. Check the file size if it is greater than 5 mb
        elseif ($fileSize >  5000000) {
            $_SESSION['error_msg'] = "File too large. max: 5mb!";
            header("Location: ../../app/new-post");
        }
        
        else{
            // 5. Create a location to store the files
            $location = "../img/uploads/";

            // 6. Generate a new name for the file.
            $newName = time(). rand(100000,999999). '.'.$ext;
            
            //7. Move the file

            if(!move_uploaded_file($fileTmpLoc, $location.$newName )){
                $_SESSION['error_msg'] = "Failed to upload file!";
                header("Location: ../../app/new-post");
            }else{
                $sql = "INSERT INTO posts(userid,author,title,post,cover) VALUES(?,?,?,?,?)";
                $stmt = mysqli_stmt_init($connectDb);
                mysqli_stmt_prepare($stmt,$sql);
                mysqli_stmt_bind_param($stmt,"sssss",$id,$author,$title,$post,$newName);

                $execute = mysqli_stmt_execute($stmt);

                if (!$execute) {
                    $_SESSION['error_msg'] = "Oops, Something went wrong!";
                    header("Location: ../../app/new-post");
                }else{
                    $_SESSION['success_msg'] = "Post has been uploaded!";
                    header("Location: ../../app/new-post");
                }

            }

        }
    }