<?php
$con = mysqli_connect("localhost", "root", "", "loginsystem");
if (!$con) {
    die("Please Check your Connection" . mysqli_error($con));
}
