<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            <a href="register.php" class="btn btn-primary float-right">Register/Add</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "form_db");

                        $register = "SELECT * FROM details";
                        $register_run = mysqli_query($conn, $register);

                        if(mysqli_num_rows($register_run) > 0)
                        {
                        ?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Show All</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while ($reg_row = mysqli_fetch_array($register_run))
                                    {
                                ?>
                                <tr>
                                    <th><?php echo $reg_row['ID']; ?></th>
                                    <td><?php echo $reg_row['FirstName']; ?></td>
                                    <td><?php echo $reg_row['LastName']; ?></td>
                                    <td><?php echo $reg_row['Email']; ?></td>
                                    <td><?php echo $reg_row['PhoneNumber']; ?></td>
                                    <td>
                                        <a href="show.php?ID=<?php echo $reg_row['ID']; ?>" class="btn btn-warning">Show    </a>
                                    </td>
                                    <td>
                                        <a href="register-edit.php?ID=<?php echo $reg_row['ID']; ?>" class="btn btn-success">Edit</a>
                                    </td>
                                    <td>
                                        <form action="code.php" method="POST">
                                            <input type="hidden" name="delete_id" value="<?php echo $reg_row['ID']; ?>">
                                            <button type="submit" name="register_delete_btn" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php
                        }
                        else
                        {
                            echo "no record found";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>