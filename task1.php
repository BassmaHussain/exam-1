<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h3 style="color:green">1- Write a PHP script using a nested for loop that creates a chessboard.</h3>
        <div style="height:160px;width:160px " class="border ">
            <?php
            for ($i = 1; $i <= 8; $i++) {

                echo "<div class='row p-0 m-0'>";
                for ($x = 1; $x <= 8; $x++) {


            ?>
                    <div class="col p-0 m-0" style=" height:20px; width:20px; background-color:<?php echo ($i + $x) % 2 == 0 ? 'white' : 'black'; ?>"></div>

            <?php
                }
                echo '</div>';
            }
            ?>
        </div>


    </div>

</body>

</html>