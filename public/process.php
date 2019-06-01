<?php
$mysqli = new mysqli("localhost", "root", "", "dbdargs") or die(mysqli_error($mysqli));

echo("<pre>");
print_r($_POST);
// isset($_POST[])
