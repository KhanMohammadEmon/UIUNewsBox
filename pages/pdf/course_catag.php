<?php

include '../sqlCommands/connectDb.php';

$msg = "";

if (isset($_POST['submit'])) {
    $cat_name = $_POST['cat_name'];
    $cat_order = $_POST['cat_order'];

    $q = "INSERT INTO course_categories (id,cat_name, course_code) VALUES ('','$cat_name', '$cat_order')";
    $result = mysqli_query($sql, $q);
    if ($result) {
        $msg = "<div class='alert alert-success'>Category has been successfully created.</div>";
    } else {
        $msg = "<div class='alert alert-danger'>Something wrong went. Please try again.</div>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="../forumRep/assets/css/favicon.png">
</head>
<body>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-8 col-12 mx-auto bg-white p-4 shadow">
                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">Add Category</h1>

                <form action="" method="post">
                    <?php echo $msg; ?>
                    <div class="form-group">
                        <label for="name">Course Name</label>
                        <input type="text" class="form-control" name="cat_name" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="order">Course ID</label>
                        <input type="txt" class="form-control" name="cat_order" id="order" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Add Category</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>
