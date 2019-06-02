<?php
// session_start();

$mysqli = new mysqli("localhost", "root", "", "dbdargs");

if (isset($_POST['save'])) {
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $location = mysqli_real_escape_string($mysqli, $_POST['location']);

    $mysqli->query("INSERT INTO data (name, location) VALUES ('$name', '$location')");

    $_SESSION['message'] = "Record hes been saved";
    $_SESSION['msg_type'] = "success";
}

if (isset($_GET['delete'])) {
    $id = mysqli_real_escape_string($mysqli, $_GET['delete']);

    $mysqli->query("DELETE FROM data WHERE id=$id");
    $_SESSION['message'] = "Record hes been deleted";
    $_SESSION['msg_type'] = "danger";
}

function pre_r($arr)
    {
        echo ("<pre>");
        print_r($arr);
        echo ("</pre>");
    }