<?php
$mysqli = new mysqli("localhost", "root", "", "dbdargs");

if (isset($_POST['save'])) {
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $location = mysqli_real_escape_string($mysqli, $_POST['location']);

    $mysqli->query("INSERT INTO data (name, location) VALUES ('$name', '$location')");
}
