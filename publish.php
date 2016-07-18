<?php

include 'database.php';

$item = $_GET['id'];
$place = $_GET['place'];
$sql = "UPDATE `published` SET `item_id` = $item WHERE `place` = '$place'";
mysqli_query($conn, $sql);
