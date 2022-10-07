<?php 
session_start();
include '../sqlCommands/connectDb.php';



if (isset($_SESSION['id'])) {
    if ($_SESSION['role'] == 1) {

        $id = $_GET['id'];

        $q = "DELETE FROM course_categories WHERE id='$id'";
        $result = mysqli_query($sql, $q);
        if ($result) {
            header("Location: categories.php?remove_success=true");
        } else {
            header("Location: categories.php?remove_success=false");
        }

    } else {
        header("Location: delete.php");
    }
}

?>