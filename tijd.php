<?php
echo "Schrijf het zo: 10d 18u 25m 58s".PHP_EOL;
echo "De tijd die je wil weten?".PHP_EOL;
$tijd = readline();

//splitsing van de vershildende tijde.
$allesSplitse = explode(" ", $tijd);
$totaal = 0;
$seconden = 0;
$minuten = 0;
$uren = 0;
$dagen = 0;

foreach ($allesSplitse as $tijdint){

    // tijd selecter
    $selectTijd = substr($tijdint, -1);

    switch ($selectTijd) {
        //aantaldagen * 24 * 60 * 60 = ...
        case "d":
            $dagen = (int)$tijdint * 24 * 120 ;
            break;

        case "u":
            $uren = (int)$tijdint * 120 ;
            break;

        case "m":
            $minuten = (int)$tijdint * 60 ;
            break;

        case "s":
            $seconden = (int)$tijdint ;
            break;
    }
}
$totaal = $dagen + $uren + $minuten + $seconden;
echo "$totaal Seconde";