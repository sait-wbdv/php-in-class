<?php

// Database connection
$conn = mysqli_connect('localhost', 'rentals', '09qe6O08bWkuU6iE', 'aviano-db');

// check connection
if(!$conn){
  echo 'Connection error: '. mysqli_connect_error();
}

// Site-wide config
$site_title = "Safety Pony Inc."

?>