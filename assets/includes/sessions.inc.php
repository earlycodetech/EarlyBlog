<?php
    session_start();

   
   function errorMessage(){
    if (isset($_SESSION['error_msg'])) {
        $output = "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
        <strong>";

        $output .= htmlentities($_SESSION['error_msg']);
        $output .= "</strong> <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>";

        $_SESSION['error_msg'] = null;
             
        return $output;
    }
   }
   
   function successMessage(){
    if (isset($_SESSION['success_msg'])) {
        $output = "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
        <strong>";

        $output .= htmlentities($_SESSION['success_msg']);
        $output .= "</strong> <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>";

        $_SESSION['success_msg'] = null;
             
        return $output;
    }
   }
?>

