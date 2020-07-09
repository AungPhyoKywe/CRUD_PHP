<?php

include('header.php');
include('db_connect.php');


?>
<!DOCTYPE html>
<html>
<head>
    <title></title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
            integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
            crossorigin="anonymous"></script>


</head>
<body>


<div class="container">

    <?php if (isset($_SESSION['up'])) { ?>
        <div class="alert alert-success" role="alert">
            Successfully Updated!
        </div>
    <?php }
    unset($_SESSION['up']);

    ?>


    <?php if (isset($_SESSION['delete'])) { ?>
        <div class="alert alert-danger" role="alert">
            Record has been deleted!
        </div>
    <?php }
    unset($_SESSION['delete']);

    ?>


    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>


        <?php

        if (isset($_SESSION['success'])) {


            ?>

            <div class="alert alert-success" role="alert">
                Successfully posted!
            </div>


        <?php }

        unset($_SESSION['success']);

        $s = "SELECT * FROM post";


        $result = $conn->query($s);

        if ($result->num_rows > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {


        ?>
        <tr>
            <th scope="row"><?php echo $row['ID']; ?></th>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td>
                <a href="read.php?read=<? echo $row['ID']; ?>" class="badge badge-primary">read</a>

                <a href="insert.php?edit=<? echo $row['ID']; ?>" class="badge badge-success">update</a>
                <a href="home.php?id=<? echo $row['ID']; ?>" class="badge badge-danger">delete</a>

                <?php
                }
                } else {

                    ?>

                    <div class="alert alert-danger" role="alert">
                        All post deleted!
                    </div>

                    <?php
                }


                ?>

            </td>
        </tr>

        </tbody>
    </table>

</div>


</body>
</html>

<?php

include('footer.php');


?>

