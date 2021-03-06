<?php
include('includes/config.php');

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

var_dump($vehicles);


// *******************
// Fetch one
// GET '/vehicles/:id'
//********************

// write query for all vehicles
$sql = 'SELECT * FROM vehicle WHERE id = 1';

// get the result set (set of rows)
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$vehicle = mysqli_fetch_row($result);

var_dump($vehicle);

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
        	<h1>Products</h1>
            <aside>
            	<h2>Quote of the Day</h2>
				<p>&ldquo;Very little is needed to make a happy life; it is all within yourself, in your way of thinking.&rdquo; - Marcus Aurelius</p>
            </aside>	       
<p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>

<h2>Header Level 2</h2>
	       
<ol>
   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
   <li>Aliquam tincidunt mauris eu risus.</li>
</ol>

<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote>

<h3>Header Level 3</h3>

<ul>
   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
   <li>Aliquam tincidunt mauris eu risus.</li>
</ul>

<pre><code>
#header h1 a { 
	display: block; 
	width: 300px; 
	height: 80px; 
}
</code></pre>
        </main>
        <?php include("includes/partials/footer.php"); ?>

    </div>
</body>
</html>