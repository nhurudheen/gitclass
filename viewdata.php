<!DOCTYPE html>
<html lang="en">
    <head>
        <title>View Data</title>
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
                    <h5 class="modal-title" id="exampleModalLabel">View User Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                           
<?php
include_once("connection.php");
?>

                    <form>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6"> 
                                <?php

include("connection.php");
{
$sql=mysqli_query($db_connect,"select * from datax order by id desc");
while($result=mysqli_fetch_assoc($sql))
{
$id=$result['id'];  
echo "<label class='form-label'><b>Email Address</b> <p>".$result['email']."</p></label></div>
                                <div class='col-md-6'>
                                    <label class='form-label'><b>Full Name</b> <p>".$result['name']."</p></label></div>";
}
}?>
                            </div>
                           
                            
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
   
       

        <!-- Bootstrap JS -->
        <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
