<?php
    include ("../connection_and_db/connection.php");
    $sql = "SELECT * FROM teacherss";
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
<body class ="bg-warning text-light" >
    <div class="container-fluid">
        <div class="container">
            <div class="shadow-lg bg-dark m-5 p-5">
            <h1 style ="font-family:'fantasy'" class="text-center ">FORM</h1>
                <form action="store.php" method="POST">
                    <div class="row">
                        <div class="mt-3 col-md-6">
                            <label for="teacher_name">Teacher Name</label>
                            <input type="text" class="form-control" name="teacher_name" required>
                        </div>
                        <div class="mt-3 col-md-6">
                            <label for="teacher_Last_name">Teacher Last Name</label>
                            <input type="text" class="form-control" name="teacher_last_name" required>
                        </div>
                        <div class="mt-3 col-md-12">
                            <label for="phone_no">Phone Number</label>
                            <input type="text" class="form-control" name="phone_no" required>
                        </div>
                        <div class="mt-3 col-md-12">
                            <label for="class_id">Class Name</label>
                            <select class="form-control" name="class_id" required>
                                <option value="">Please Select</option>
                                <?php
                                    if ($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                ?>
                                    <option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_id']; ?></option>
                                <?php } ?>
                                <?php } ?>
                                
                            </select>
                        </div>
                        <div class="col-md-12 mt-3">
                            <button type="submit" class="btn btn-block btn-success">Save Data</button>
                        </div>
                    </div>
                </form>
                <div class="mt-4">
                    <a href="teacher.php"><button class="btn btn-block btn-danger">Back to table</button></a>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>