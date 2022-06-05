<?php
    include ("../connection_and_db/connection.php");
    $sql = "SELECT * FROM classess WHERE id = $_GET[id]";
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
<body  style = "background-color:black; color:white; ">
    <div class="container-fluid">
        <div class="container">
            <div style ="border: 5px white groove" class="shadow-lg  m-5 p-5">
            <h1 style ="font-family:'fantasy'" class="text-center ">EDIT CLASS TABLE</h1>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()){
                ?>
                <form action="update.php" method="POST">
                    <div class="row">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" required>
                        <div class="mt-3 col-md-12">
                            <label for="class_name">Class Name</label>
                            <input style ="border: white 5px groove; background-color:black;color:white" type="text" class="form-control" name="class_name" value="<?php echo $row['class_name']; ?>" required>
                        </div>
                        <div class="mt-3 col-md-12">
                            <label for="room_no">Room Number</label>
                            <input style ="border: white 5px groove; background-color:black;color:white" type="text" class="form-control" name="room_no"  value="<?php echo $row['room_no']; ?>" required>
                        </div>
                        <div class="mt-3 col-md-12">
                            <label for="building_no">Building Number</label>
                            <input style ="border: white 5px groove; background-color:black;color:white" type="text" class="form-control" name="building_no" value="<?php echo $row['building_no']; ?>" required>
                        </div>
                        <div class="col-md-12 mt-3">
                            <button type="submit" class="btn btn-block btn-success">Save Data</button>
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