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
<body style = "background-color:black;color:white;font-family:'fantasy';">
    <div class="container-fluid">
        <div class="container p-5 mt-5" style ="border:white 4px groove;">
        <div class="row">
            <div class="col-md-6">
            <h1 class="text-center " >EDIT CLASSES TABLE</h1>
                    <div class="text-center">
                    <a href="class.php"><button class="btn btn-light pl-5 pr-5 pt-2 pb-2  mt-5">Back to table</button></a>
            </div>
            </div>
            <div class="col-md-6">
            <form action="class_store.php" method="POST">
                    
                       
                    <label for="class_name">Class Name</label>
                    <input style="background-color: black;color: white;border: 4px white groove;" type="text" class="form-control" name="class_name" required>
             
                    <label class ="mt-3" for="room_no">Room Number</label>
                    <input style="background-color: black;color: white;border: 4px white groove;" type="text" class="form-control" name="room_no" required>
             
                    <label class ="mt-3" for="building_no">Building Number</label>
                    <input style="background-color: black;color: white;border: 4px white groove;" type="text" class="form-control" name="building_no" required>
             
                    <button type="submit" style ="float:right;" class="btn btn-light  mt-4 pl-5 pr-5 pt-2 pb-2">Save Data</button>
                
            </div>
        </form>
            </div>
           
               
           
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>