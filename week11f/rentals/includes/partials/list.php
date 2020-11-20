<?php
  // List of vehicles
  foreach($vehicles as $vehicle) {
  
?>
        <li><a href="rentals.php?id=<?php echo $vehicle['id']; ?>"><?php echo $vehicle['brand']." ".$vehicle['model']; ?></a></li>
<?php
  }
?>