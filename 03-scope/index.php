<?php
  include './includes/parent.inc.php';
  include './includes/child.inc.php';
  $papa = new ParentClass;
  $child = new ChildClass;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Scope</title>
</head>
<body>
  <p><?php echo $child->name; ?></p>
  <p><?php echo $child->getNickName(); ?></p>
  <p><?php echo $papa->getMoney(); ?></p>
</body>
</html>
