<?php
$servername = "localhost";
$username = "db_user";
$password = "db_pass";
$dbname = "db_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function get_items($id = NULL) {
  global $conn;
	$context = array();
  $featured = get_featured();
  $published_array = array();
  foreach ($featured as $place) {
    $published_array[] = $place['item_id'];
  }
	$query = "SELECT * FROM `sortable`";
  if (isset($id)) {
    $query .= "WHERE `id` LIKE '$id'";
  }
  $query .= " ORDER BY `position`";
  $query = $conn->query($query);

	while ($row = mysqli_fetch_assoc($query)) {
    if (!in_array($row['id'],$published_array)) {
  		$context[] = $row;
    }
	}
	return $context;
}

function get_featured($place = NULL) {
  global $conn;
	$context = array();
  $query = "SELECT * FROM `sortable`
        INNER JOIN `published` ON `published`.`item_id` = `sortable`.`id`";
  if (isset($place)) {
  	$query .= "WHERE `published`.`place` LIKE '$place'";
  }

  $query = $conn->query($query);

	while ($row = mysqli_fetch_assoc($query)) {
		$context[] = $row;
	}
	return $context;
}
