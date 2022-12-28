<?php include("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result management system </title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-3 shadow-lg">
                <div class="card">
                    <div class="card-body">
                        <h2 class="fw-bold text-center text-primary">Student Details</h2>
                        <form action="disactive.php" method="post">
                            <div class="mb-3">
                                <label for="" class="text-dark" style="font-size:18px;">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="text-dark" style="font-size:18px;">contact</label>
                                <input type="text" name="contact" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="text-dark" style="font-size:18px;">email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="row">
                                <div class="mb-3 col">
                                    <label for="" class="text-dark" style="font-size:18px;">city</label>
                                    <input type="text" name="city" class="form-control">
                                </div>
                                
                                <div class="mb-3 col">
                                    <label for="" class="text-dark" style="font-size:18px;">state</label>
                                    <input type="text" name="state" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3 col">
                                    <label for="" class="text-dark" style="font-size:18px;">pincode</label>
                                    <input type="text" name="pincode" class="form-control">
                                </div>
                            <div class="mb-3">
                                <input type="submit" value="create" name="create" class="btn btn-danger d-inline-block" style="margin-left:110px;font-size:20px;">
                            </div>
                        </form>

                        <?php
                            if(isset($_POST['create'])){
                                $id = $_POST['id'];
                                $name = $_POST['name'];
                                $contact = $_POST['contact'];
                                $email = $_POST['email'];
                                $city = $_POST['city'];
                                $state = $_POST['state'];
                                $pincode = $_POST['pincode'];

                                $query = mysqli_query($con,"insert into student (name,contact, email, city, state, pincode) value ('$name','$contact','$email','$city','$state','$pincode')");

                                if($query){
                                    echo "<script> window.open('ragis.php','_self')</script>";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>            
        </div>
    </div>

</body>
</html>