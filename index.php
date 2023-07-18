<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method = "POST">
    <input type="text" name="name1"><br>
    <input type="text" name="name2"><br>
    <input type="text" name="email">
    <button type="submit" name= "send">add</button>
   </form>
   <br><br>

   <?php
    if(isset($_POST["send"])){
      echo $_POST["name1"]."<br>".$_POST["name2"];
    }
    ?>
</body>
</html>