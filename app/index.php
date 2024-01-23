<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
    <form action="./index.php" method="POST">

    <div style="display:flex; flex-direction:column; gap: 10px">
    <div class="form-control">
    <label for="fname">First Name :</label>
    <input type="text" name="fname" id="fname">
    </div>

    <div class="form-control">
    <label for="lname">Last Name :</label>
    <input type="text" name="lname" id="lname">
    </div>

    <button type="submit" class="form-btn">Submit</button>
    </div>

    </form>

    <div style="margin-top: 50px;">
        <p>
          <?php if(isset($_POST['fname']) && !empty($_POST['fname'])):?>
          first name : <?php echo $_POST['fname']; ?><br/>
          <?php endif;?>
          <?php if(isset($_POST['lname']) && !empty($_POST['lname'])):?>
          last name : <?php echo $_POST['lname']; ?>
          <?php endif ?>
        </p>
    </div>
    </div>

</body>
</html>