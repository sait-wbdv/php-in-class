<?php
include('includes/config.php');

$vehicle = '';
$vehicles = [];

if (isset($_GET['id']) && (int)$_GET['id'] > 0) {
  // *******************
  // Fetch one
  // GET '/vehicles/:id'
  //********************

  // write query for all vehicles
  $sql = 'SELECT * FROM vehicle WHERE id = '.$_GET['id'];

  // get the result set (set of rows)
  $result = mysqli_query($conn, $sql);

  // fetch the resulting rows as an array
  $vehicle = mysqli_fetch_row($result);

  $content = 'single.php';

} else {
  // *******************
  // Fetch all
  // GET '/vehicles/'
  //********************

  // write query for all vehicles
  $sql = 'SELECT * FROM vehicle ORDER BY model';

  // get the result set (set of rows)
  $result = mysqli_query($conn, $sql);

  // fetch the resulting rows as an array
  $vehicles = mysqli_fetch_all($result, MYSQLI_ASSOC);

  $content = 'list.php';
}

// *******************
// Cleanup
//********************

// free the $result from memory (good practise)
mysqli_free_result($result);

// close connection
mysqli_close($conn);

?>
<!doctype html>
<html>
<head>
  <?php include("includes/partials/head.php"); ?>

</head>

<body>
	<div id="wrapper">
  <?php include("includes/partials/header.php"); ?>

    <main>
      <h1>Rentals</h1>
      <ul>
        <?php include('includes/partials/'.$content); ?>
      </ul>
      <pre>
      <?php
// var_dump($vehicles);
      ?>
      </pre>

    </main>
    <?php include("includes/partials/footer.php"); ?>

  </div>
</body>
</html>