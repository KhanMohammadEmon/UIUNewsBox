<?php include '../sqlCommands/connectDb.php'; ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="../forumRep/assets/css/favicon.png">
</head>
<body>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Courses</h1>

        <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Courses</h6>
        </div>
        <div class="card-body">
            <?php 
            
            if (isset($_GET['remove_success'])) {
                if ($_GET['remove_success'] == "true") {
                    echo "<div class='alert alert-success'>Record deleted successful.</div>";
                } else {
                    echo "<div class='alert alert-danger'>Record can't deleted.</div>";
                }
            }

            ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Course Name</th>
                            <th>Course Code</th>
                            <!-- <th>Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $q = "SELECT * FROM course_categories";
                        $result = mysqli_query($sql, $q);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['cat_name']; ?></td>
                            <td><?php echo $row['course_code']; ?></td>
                            <td>
                                <!-- <a href="edit-category.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a> -->
                                <!-- <a href="delete-category.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a> -->
                            </td>
                        </tr>
                        <?php

                            }
                        }

                        ?>
                    </tbody>
                </table>
            </div>
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

    