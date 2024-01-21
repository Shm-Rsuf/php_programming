<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
    <form action="index.php" method="post">
      <label for="name">Name:</label>
      <input type="text" name="name" value=<?php ?>><br>

      <label for="email">E-mail:</label>
      <input type="text" name="email"><br>
      <input type="submit">
    </form>

    Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
</body>
</html>