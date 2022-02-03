<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add Data to the data</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="text" class="form-control" id="username" name="email" placeholder="email" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="password" name="name" placeholder="Full Name" />
                        </div>
                      
                        <div class="modal-footer d-block">
                            <p class="float-start"><a href="viewdata.html">View Data</a></p>
                            <button name="submit" class="btn btn-warning float-end">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   
       

        <!-- Bootstrap JS -->
        <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

<?php
        // if submit button is clicked
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $name = $_POST['name'];
 

                // connect to database
      include "connection.php";

                // sql statment to insert the details
                $query = "INSERT INTO `datax`(`email`, `name`) VALUES('$email', '$name')";
                // query the database;
                $result = $db_connect->query($query);
                //mysqli_query($connection,$query);

            }


    ?>
