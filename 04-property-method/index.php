<?php include("./includes/newclass.inc.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Properties Methods</title>
</head>
<body>
  <?php // instantiate
    $obj = new NewClass;
    $obj->setProp("New data");
  ?>
 <p><?php echo $obj->getProp(); ?></p>
</body>
</html>
