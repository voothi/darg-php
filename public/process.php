<?php
$mysqli = new mysqli("localhost", "root", "", "dbdargs");

$id = 0;
$update = false;
$name = '';
$location = '';

if (isset($_POST['save'])) {
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $location = mysqli_real_escape_string($mysqli, $_POST['location']);

    $mysqli->query("INSERT INTO data (name, location) VALUES ('$name', '$location')");

    header('Location: index.php');
}

if (isset($_GET['delete'])) {
    $id = mysqli_real_escape_string($mysqli, $_GET['delete']);

    $mysqli->query("DELETE FROM data WHERE id=$id");

    header('Location: index.php');
}

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM data WHERE id=$id");

    if (isset($result)) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $location = $row['location'];
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $location = $_POST['location'];
    $result = $mysqli->query("UPDATE data SET name='$name', location='$location' WHERE id=$id");

    header('Location: index.php');
}
