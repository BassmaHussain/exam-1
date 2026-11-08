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
        <h3 style="color:green">
6- write a program to find the max number of numbers group [10,30,20],
using if.</h3>

        <?php

        $array = [2, 4,3, 1, 6, 7, 5, 8, 0, 9];


        function maxValue(array $array){
         $max =$array[0];
            for ($i = 0; $i < count($array); $i++) {
                if($array[$i] > $max){
                     $max = $array[$i];
                }
            }

           
            return  $max;
        }


        echo "Max value : ". maxValue($array);

        ?>

    </div>

</body>

</html>