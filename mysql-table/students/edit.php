<?php
    include ("../connection_and_db/connection.php");
    $sql = "SELECT * FROM studentss WHERE id = $_GET[id]";
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Form</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/fontawesome.min.css">
    <style>
        a:link{
            text-decoration: none;
        }
    </style>
</head>
<body class ="bg-info">
    <div class="container-fluid">
        <div class="container">
            <div class="shadow-lg bg-success m-5 p-5">
                <h1 style ="font-family:'fantasy'" class="text-center text-dark">EDIT STUDENT TABLE</h1>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()){
                ?>
                <form action="update.php" method="POST">
                    <div class="row">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" required>
                        <div class="mt-3 col-md-6">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name']; ?>" required>
                        </div>
                        <div class="mt-3 col-md-6">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" name="last_name"  value="<?php echo $row['last_name']; ?>" required>
                        </div>
                        <div class="mt-3 col-md-12">
                            <label for="phone_no">Phone Number</label>
                            <input type="text" class="form-control" name="phone_no" value="<?php echo $row['phone_no']; ?>" required>
                        </div>
                        <div class="mt-3 col-md-12">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
                        </div>
                        <div class="mt-3 col-md-12">
                            <label for="class_id">Class ID</label>
                            <input type="text" class="form-control" name="class_id" value="<?php echo $row['class_id']; ?>" required>
                        </div>
                        <div class="col-md-12 mt-3">
                            <button type="submit" class="btn btn-block btn-warning">Save Data</button>
                        </div>
                    </div>
                </form>
                <?php
                        }
                    }
                ?>
                <div class="mt-4">
                    <a href="class.php"><button class="btn btn-block btn-danger">Back to table</button></a>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>