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
        <h3 style="color:green">10- Write a function to check whether a number is prime or not.
        </h3>

        <!-- Note: A prime number (or a prime) is a natural number greater than 1 that has no
           positive divisors other than 1 and itself. -->

        <?php

        $mynumber = 9;
        function isPrime(int $number)
        {
            $result = 0;
            for ($i = 2; $i < $number; $i++) {
                $result = $number % $i;

                if ($result === 0) {
                    return false;
                }
            }

            return  true;
        }

        if (isPrime($mynumber)) {
            echo "Prime number";
        } else {
            echo "Not a Prime number";
        }
        ?>

    </div>

</body>

</html>