<?php

// Database connection
$conn = mysqli_connect('localhost', 'rentals', '09qe6O08bWkuU6iE', 'aviano-db');

// check connection
if(!$conn){
  echo 'Connection error: '. mysqli_connect_error();
}

// *******************
// Fetch all
//********************

// write query for all vehicles
$sql = 'SELECT * FROM vehicle ORDER BY model';

// get the result set (set of rows)
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$vehicles = mysqli_fetch_all($result, MYSQLI_ASSOC);

var_dump($vehicles);


// *******************
// Fetch one
//********************

// write query for all vehicles
$sql = 'SELECT * FROM vehicle WHERE id = 1';

// get the result set (set of rows)
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$vehicle = mysqli_fetch_row($result);

var_dump($vehicle);



// Site-wide config
$site_title = "Safety Pony Inc."

?>