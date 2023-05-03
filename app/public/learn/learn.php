<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Repetion</h1>
//repetion
//ej färdig
<?php 
//rätt

$arr1 = [1,2,3];
$arr2 = [2,3,4];
$countLimit = count($arr2);
if (count($arr1) < count($arr2)) {
$countLimit = count($arr1);
}

for ($i=0; $i < count($arr1); $i++) { 
    echo $arr1[$i] + $arr2[$i] . " ";
}


// mitt försök
$numbers = [1,2,3];

for ($numbers=0; $numbers < count($numbers) ; $numbers++) { 
    echo $number [$numbers]. " ";
}
$numbers1 = [4,5,6]

for ($numbers1=4; $numbers1 < count($numbers1); $numbers1++) { 
    echo $numbers1 [$numbers1]. " ";
}

?>

<?php 

$words = ["Jag, heter, Olle,"];

for ($i=0; $i <count(words); $i++) { 

    echo $words [$i]. " ";
}


?>

<?php 


for ($i=1; $i <=11 ; $i++) { 
    echo [$i]. " ";
}
    
}



?>


<?php 

$twoDimArr = [
    [1,2,3],
    [4,5,6,7],
    [8,9],
];
// skriv ut 1, 4, 7

//echo $twoDimArr[0] [0];
//echo $twoDimArr[1] [0];
//echo $twoDimArr[2] [0];

// använd funktionen var_dum för att skriva ut arrayn till dom
// skriv ut hela 2-dim arrayen med en for-loop

$total = 0;

for ($i=0; $i < count($twoDimArr); $i++) { 
    //var_dump

$innerArrLength = count($twoDimArr[$i]);

for ($k=0; $k < $innerArrLength; $k++) {

    $total += $twoDimArr[$i] [$k];
}

  //  $total +=$twoDimArr[$i][0] + $twoDimArr[$i][1] + $twoDimArr[$i][2];
}


echo "total: $total";

// itteration 1: i=0 , k=0
// itteration 1: i=0 , k=1
// itteration 1: i=0 , k=2
// itteration 1: i=1 , k=0
// itteration 1: i=1 , k=1
// itteration 1: i=1 , k=2
// itteration 1: i=1 , k=3
// itteration 1: i=2 , k=0
// itteration 1: i=2 , k=1


//var_dump($testArr);








?>







</body>
</html>