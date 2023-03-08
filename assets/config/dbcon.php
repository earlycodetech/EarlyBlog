<?php
const server = "localhost";
const dbusername = "root";
const dbpassword = "";
const dbname = "early_blog";

$connectDb = mysqli_connect(
    server,
    dbusername,
    dbpassword,
    dbname
);

if (!$connectDb) {
    die("Something Went Wrong: " . mysqli_connect_error());
}
