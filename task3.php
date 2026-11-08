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
        <h3 style="color:green">3- $array = [2,4,3,1,6,7,5,8,0,9] .
Write a PHP program to sort this array to ASC and also sort it as DESC .</h3>
  
<?php


$array = [2,4,3,1,6,7,5,8,0,9];
// 1- DESC
function arraySortDESC(array $array){
    for($i=0;$i<count($array);$i++){
    $temp = $array[$i];
    for($x=0;$x<count($array);$x++){
        if($array[$i] > $array[$x]){
            $temp = $array[$i];
           $array[$i] = $array[$x];
           $array[$x] =$temp;
        }

    }
}
return $array;
} 


// 2- ASC
function arraySortASC(array $array){
  for($i=0;$i<count($array);$i++){
    $temp = $array[$i];
    for($x=0;$x<count($array);$x++){
        if($array[$i] < $array[$x]){
            $temp = $array[$i];
           $array[$i] = $array[$x];
           $array[$x] =$temp;
        }

    }
}
return $array;
}



echo "1- DESC <pre>";
print_r(arraySortDESC($array));



echo "2- ASC <pre>";
print_r(arraySortASC($array));

?>

    </div>

</body>

</html>