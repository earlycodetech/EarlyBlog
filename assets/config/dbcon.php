<?php
const server = "localhost";

const dbusername = "root";
const dbpassword = "";
const dbname = "early_blog";

// const dbusername = "u710683456_early_blog";
// const dbpassword = "V1e!xrMH:y";
// const dbname = "u710683456_early_blog";
$connectDb = mysqli_connect(
    server,
    dbusername,
    dbpassword,
    dbname
);

if (!$connectDb) {
    die("Something Went Wrong: " . mysqli_connect_error());
}
