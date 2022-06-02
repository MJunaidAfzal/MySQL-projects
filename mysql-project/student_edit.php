
<?php
    include ("connect.php");
    $sql = "SELECT * FROM students WHERE id = $_GET[id]";
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Form</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <style>
        a:link{
            text-decoration: none;
        }
    </style>
</head>
<body style = "background-color:grey; color:gold;font-family:'fantasy';">
    <div class="container-fluid">
        <div class="container p-5 mt-5" style ="border:gold 4px groove;">
        <div class="row">
            <div class="col-md-6">
            <h1 class="text-center " >EDIT STUDENTS TABLE</h1>
                    <div class="text-center">
                    <a href="student.php"><button class="btn btn-warning pl-5 pr-5 pt-2 pb-2  mt-5">Back to table</button></a>
            </div>
            </div>
            <div class="col-md-6">
            <form action="student_store.php" method="POST">
                    
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" required>           

                    <label for="student_name">student_name</label>
                    <input style="  background-color:grey; color: gold;border: 4px gold groove;" type="text" class="form-control" name="student_name" value="<?php echo $row['student_name']; ?>" required>
             
                    <label class ="mt-3" for="age">Age</label>
                    <input style= "background-color:grey; color: gold;border: 4px gold groove;" type="text" class="form-control" name="age"  value="<?php echo $row['age']; ?>" required>
             
                    <label class ="mt-3" for="subject">Subject</label>
                    <input style= "background-color:grey; color: gold;border: 4px gold groove;" type="text" class="form-control" name="subject"  value="<?php echo $row['subject']; ?>" required>

                    <label class ="mt-3" for="teacher_id">teacher_id</label>
                    <input style= "background-color:grey; color: gold;border: 4px gold groove;" type="text" class="form-control" name="teacher_id"  value="<?php echo $row['teacher_id']; ?>" required>
             
                    <button type="submit" style ="float:right;" class="btn btn-warning  mt-4 pl-5 pr-5 pt-2 pb-2">Save Data</button>
                
            </div>
        </form>
            </div>
           
               
           
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
