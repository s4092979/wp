<?php
$title = "Pets Victoria";
include "includes/header.inc";
include "includes/nav.inc";
include "includes/db_connect.inc";
$id = $_GET['id'];
$sql = "select * from pets where petid = $id";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);

print "<main>";
print "<img class='petsDetailsImg' src='images/{$row['image']}' alt={$row['petname']}>";


include "includes/footer.inc";
?>