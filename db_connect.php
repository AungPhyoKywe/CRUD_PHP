<?php
session_start();
$id = 0;
$update = false;
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "testDB";
$erro = array();

$tit = "";
$d = "";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("connection failed:" . mysqli_connect_erro());
    # code...
}


if (isset($_POST['insert'])) {

    $title = $_POST['title'];

    $des = $_POST['des'];


    $sql = "INSERT INTO post(title,description) VALUES ('$title','$des')";


    $_SESSION['success'] = 1;


    mysqli_query($conn, $sql);

    header("location:home.php");


}

if (isset($_GET['id'])) {

    $delete_id = $_GET['id'];

    $_SESSION['delete'] = 1;

    mysqli_query($conn, "DELETE FROM post WHERE ID='$delete_id' ");


}

if (isset($_GET['edit'])) {

    $id = $_GET['edit'];

    $update = true;

    $sql = "SELECT * FROM post WHERE ID='$id' ";


    $results = $conn->query($sql);

    $row = mysqli_fetch_assoc($results);


    $tit = $row['title'];

    $d = $row['description'];

}

if (isset($_POST['update'])) {

    $_SESSION['up'] = 1;

    $id = $_POST['id'];


    $title = $_POST['title'];

    $des = $_POST['des'];
    mysqli_query($conn, "UPDATE post SET title= '$title', description = '$des' WHERE ID=$id");

    header("location:home.php");

}


if (isset($_GET['read'])) {

    $id = $_GET['read'];

    $sql = "SELECT * FROM post WHERE ID='$id' ";

    $results = $conn->query($sql);

    $row = mysqli_fetch_assoc($results);

    $tit = $row['title'];

    $d = $row['description'];
    # code...
}


?>