<?php
session_start();
require 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Crud Display</title>
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light link-offset-2 link-underline link-underline-opacity-0">Add user</a></button>

        <table class="table table-hover ">
            <thead class="mdb-color darken-3">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody >
                <?php 
                    $sql = "select * from crud";
                    $result = mysqli_query($con,$sql);
                    if($result){
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $mobile = $row['mobile'];
                            $password = $row['password'];

                            echo '
                                <tr>
                                    <th scope="row">'.$id.'</th>
                                    <td>'.$name.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$mobile.'</td>
                                    <td>'.$password.'</td>
                                    <td>
                                    <button class="btn btn-primary">
                                        <a href="user.php" class="text-light link-offset-2 link-underline link-underline-opacity-0">Update</a>
                                    </button>
                                    <button class="btn btn-danger">
                                        <a href="delete.php?deleteid='.$id.'" class="text-light link-offset-2 link-underline link-underline-opacity-0">Delete</a>
                                    </button>
                                    </td>
                                </tr>
                            ';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>