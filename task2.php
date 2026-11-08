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
        <h3 style="color:green">2-write a PHP program to print shape (using nested loop)</h3>


        // 1
        <div class="text-center">


            <?php
            $counter = 1;
            for ($i = 1; $i <= 9; $i++) {
                if ($i <= 5) {
                    $counter = $i;
                }
                for ($x = 1; $x <= $counter; $x++) {
                    echo " * ";
                }
                echo "<br/>";
                $counter -= 1;
            }
            ?>


        </div>
        <br />
        // 2

        <div>


            <?php
            $counter = 0;
            for ($i = 1; $i <= 10; $i++) {

                if ($i <= 5) {
                    $counter++;
                } elseif ($i > 6) {
                    $counter--;
                }
                for ($x = 1; $x <= $counter; $x++) {
                    echo " * ";
                }
                echo "<br/>";
            }
            ?>


        </div>
        <br />
        // 3

        <div>


            <?php
            $counter = 1;
            for ($i = 1; $i <= 9; $i++) {
                if ($i <= 5) {
                    $counter = $i;
                }

                if ($counter % 2 !== 0) {
                    for ($x = 1; $x <= $counter; $x++) {
                        echo " * ";
                    }
                    echo "<br/>";
                }


                $counter -= 1;
            }
            ?>


        </div>
    </div>

</body>

</html>