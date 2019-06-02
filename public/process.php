<?php
$mysqli = new mysqli("localhost", "root", "", "dbdargs");

if (isset($_POST['save'])) {
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $location = mysqli_real_escape_string($mysqli, $_POST['location']);

    $mysqli->query("INSERT INTO data (name, location) VALUES ('$name', '$location')");
}

if (isset($_GET['delete'])) {
    $id = mysqli_real_escape_string($mysqli, $_GET['delete']);

    $mysqli->query("DELETE FROM data WHERE id=$id");
}

function pre_r($arr)
    {
        echo ("<pre>");
        print_r($arr);
        echo ("</pre>");
    }