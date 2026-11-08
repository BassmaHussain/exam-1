      <?php
          $bgcolor = "gray";
          $selectedColor="";
            if(isset($_GET["color"])){
              $selectedColor = htmlspecialchars($_GET["color"]);
              setcookie("bgcolor",$selectedColor,time() + 60*60*24 ,"/");
               $bgcolor  = $selectedColor;
            }elseif (isset($_COOKIE['bgcolor'])) {


        $bgColor = $_COOKIE['bgColor'];
   
}
         
        ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body  style="background-color: <?= $bgcolor ?? 'gray' ?>">
    <div class="container">
        <h3 style="color:green">11- Use a cookie to change the default website background color. choose the
new color from a dropdown menu of colors.
        </h3>

        
<form action="" method="get">

  <label>Background Color:</label>
  <select class="form-select" aria-label="Default select example" name="color">
  <option value="red">Red</option>
  <option value="yellow">Yellow</option>
  <option value="gray">Gray</option>
</select>

     <button type="submit" class="btn btn-primary mt-2">
            Save Color
        </button>
</form>
        <?php

        ?>

    </div>

</body>

</html>