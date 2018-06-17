<?php
require './dbcon.php';
$sql = "select * from user";
$result = mysqli_query($con, $sql);
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Show Record Data</title>
        <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <form method="post" action="delete.php">
                <h2>Delete Data</h2>
                <div class="form-group">
                    <label for="id">ID </label>
                    <input type="id" name="txtid" class="form-control">
                </div>
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
            <br>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">FirstName</th>
                        <th scope="col">LastName</th>
                        <th scope="col">Email</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Del</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php while ($row = mysqli_fetch_row($result)) { ?> 
                            <td><?php echo $row[0]; ?></td>
                            <td><?php echo $row[1]; ?></td>
                            <td><?php echo $row[2]; ?></td>
                            <td><?php echo $row[3]; ?></td>
                            <td><?php echo $row[4]; ?></td>
                            <td><a href="del.php?id=<?php echo $row[0]; ?>" class="btn btn-danger">Del</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a class="btn btn-dark" href="insert.php">กลับไปที่หน้าเพิ่มข้อมูล</a>
        </div>
    </body>
</html>
