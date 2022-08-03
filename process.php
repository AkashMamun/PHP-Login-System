<?php include 'connection.php'; ?>
<?php
// require_once('connection.php');
session_start();
if (isset($_POST['login'])) {
    if (empty($_POST['name']) || empty($_POST['password'])) {
        header("Location:index.php?empty=Plese Fill in the Blanks");
    } else {
        $query = "SELECT * FROM admin_tbl WHERE name='" . $_POST['name'] . "' and password='" . $_POST['password'] . "'  ";
        $result = mysqli_query($con, $query);
        if (mysqli_fetch_assoc($result)) {
            $_SESSION['user'] = $_POST['name'];
            header("Location: wellcome.php");
        } else {
            header("Location:index.php?invalid=Please Enter correct user name and password");
        }
    }
} else {
    echo "It's not working";
}
