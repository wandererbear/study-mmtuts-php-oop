<?php include("./includes/newclass.inc.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Properties Methods</title>
</head>
<body>
  <?php // instantiate
    $obj = new NewClass("Instantiate data");
  ?>
   <p><?php echo $obj->getProp(); ?></p>
   <?php // delete obs
     unset($obj);
   ?>
</body>
</html>
