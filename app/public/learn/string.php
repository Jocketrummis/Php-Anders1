<?php
//en variabel deklareras med inledande $
//
$name = "Flisa Hedenhös";

echo $name;

// variablers namn skrivs som snake_case i PhP: små bokstäver a-z understreck mellan orddelar
// Kebab-case 
// camelCase
// PascalCase

// ett förnamn

$first_name = "Kalle";
$fname = "Nisse";

// ett efternamn
$last_name = "Nilsson";

// kontroller vilken datatyp  som en variabel har
// gettype
echo "<br>";
echo gettype($first_name);
echo "<br>";
// strängar slås ihop med punkt
echo "Variabel med namnet last_name: <b>$last_name,</b> har datatypen:" . gettype($last_name);

// en variabel med namnet comment
$comment = "php är kul";

echo "<br>";
//hur många tecken har variabeln - strlen
$number_of_characters = strlen($comment);

echo "komentaren <i>$comment</i> har $number_of_characters tecken";

//upgift
// för att validera en variabel kan olika strängmetoder användas
// gör ngt vettigt med följande metoder
// ta bort ev inledande mellanslag med trim
// räkna ord med str_word_count
// repetera en sträng med str_repeat
// ersätt ett ord i en mening med str_replace
// testa exempelvis olika ordspråk

$proverb = "   Allt är inte guld som glimmrar     ";

// antal tecken innean trim
$number_before =strlen($proverb);
// använd funktionen för att ta bort blanksteg
$proverb = trim($proverb);

$number_after = strlen($proverb);

echo "Ordspråket $proverb hade innan trim $number_before tecken, och efter trim $number_after tecken.";
echo "<br>";

$promise = "Jag lovar att lära mig stava till programmering";
$result = str_repeat($promise, 100);
echo $result;

//fixa stora tecken till små tecken - obs funkar kanske ....... inte med svenska tecken ÅÄÖ

$message "ALLT ÄR BARA EN STOR KONSPERATION";
echo strtolower($message);
echo "<br>";


?>




<?php 





?>