<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- VISITOR COUNTER -->
<?php
include 'inc/dbconnect.php';

$q = 'UPDATE visitor_counter SET visits = visits + 1 WHERE id=1';
$dbc->query($q);
$dbc->execute();
$q = 'SELECT * FROM visitor_counter WHERE id=1';
$dbc->query($q);
$row = $dbc->show();
?>
<div class="visitor_counter">
  <h1><?php echo $row->visits; ?></h1>
</div>
  <!-- END VISITOR COUNTER -->

</body>
</html>
