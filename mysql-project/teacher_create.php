<?php
    include ("connect.php");
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
<body style = "color:black;font-family:'fantasy';">
    <div class="container-fluid">
        <div class="container p-5 mt-5" style ="border:black 4px groove;">
        <div class="row">
            <div class="col-md-6">
            <h1 class="text-center " >EDIT TEACHERS TABLE</h1>
                    <div class="text-center">
                    <a href="teacher.php"><button class="btn btn-dark pl-5 pr-5 pt-2 pb-2  mt-5">Back to table</button></a>
            </div>
            </div>
            <div class="col-md-6">
            <form action="teacher_store.php" method="POST">
                    
                       
                    <label for="teacher_name">Teacher Name</label>
                    <input style="color: black;border: 4px black groove;" type="text" class="form-control" name="teacher_name"  required>
             
                    <label class ="mt-3" for="email">E-mail</label>
                    <input style="color: black;border: 4px black groove;" type="text" class="form-control" name="email" required>
             
                    <label class ="mt-3" for="contact">Contact</label>
                    <input style="color: black;border: 4px black groove;" type="text" class="form-control" name="contact" required>
            
                    <label class ="mt-3" for="class_id">Class_id</label>
                    <input style="color: black;border: 4px black groove;" type="text" class="form-control" name="class_id" required>

                    <button type="submit" style ="float:right;" class="btn btn-dark  mt-4 pl-5 pr-5 pt-2 pb-2">Save Data</button>
                
            </div>
        </form>
            </div>
           
               
           
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>