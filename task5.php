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
        <h3 style="color:green">5- write a program to filter even numbers from an array, delete all even
numbers.</h3>

        <?php

        $array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];


        function deleteEven(array $array){
         $length =count($array);
            for ($i = 0; $i < $length; $i++) {
                if($array[$i] % 2 === 0){
                    unset($array[$i]);
                }
            }

           
            return  array_values($array);
        }


        echo"<pre>";

        print_r(deleteEven($array));
        ?>

    </div>

</body>

</html>