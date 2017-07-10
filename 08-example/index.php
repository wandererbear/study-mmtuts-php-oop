<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Example OOP</title>
</head>
<body>
  <form action="calc.php" method="post">
    <input type="text" name="num1">
    <select name="cal" onchange="showResult()">
      <option value="add">+</option>
      <option value="sub">-</option>
      <option value="mul">x</option>
    </select>
    <input type="text" name="num2">
    <button id="btn" type="submit">=</button>
  </form>
</body>
</html>
