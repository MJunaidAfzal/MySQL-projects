<?php
    include ("connect.php");
    $sql = "SELECT * FROM students"; 
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Table</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <style>
        a:link{
            text-decoration: none;
        }
    </style>
</head>
<body style ="background-color:black;">
    <div style="background-color: #1A1A1A;">
        <?php include ("nav.php") ?>
    </div>
    <div class="container-fluid">
        <div class="m-5 shadow-lg bg-light p-3 container">
            <h1 class="text-center text-dark mb-5" style ="font-family:'fantasy';">STUDENTS</h1>
            <a href="student_create.php"><button style = "float:right;" class="  btn pl-5 pr-5 pt-2 pb-2 btn-outline-primary mb-3">Add Data</button></a>
            <table class="table table-hover  table-bordered ">
                <tr>
                    <th>ID</th>
                    <th>Student_name</th>
                    <th>Age</th>
                    <th>Subject</th>
                    <th>Teacher-id</th>
                </tr>
                <?php
                    if ($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['student_name']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['subject']; ?></td>
                    <td><?php echo $row['teacher_id']; ?></td>
                    <td>
                        <a style = "color:green;" href="student_edit.php?id=<?php echo $row['id']?>"> Edit</a>&nbsp;
                        <a style = "color:red;padding-left:20px;" href="student_delete.php?id=<?php echo $row['id']?>"> Delete</a>&nbsp;
                    </td>
                </tr>
                <?php
                        }
                    }
                ?>
            </table>
        </div>
    </div>
    <?php include ("fooTer.php"); ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>