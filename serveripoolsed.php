<?php

// 13. Luua PHP fail nimega serveripoolsed.php, mis kuvab ekraanil sinu eesnime ja perekonnanime. Kumbki nimi kuvatakse eraldi PHP muutujatest, mis on string tüüpi. //
$muutuja1 = "Indro";
$muutuja2 = "Malleus";
$muutuja3 = 20;
$eesnimi_algab_vokaaliga = false;

echo $muutuja1." ".$muutuja2, " ($muutuja3)<br><br>";

// 14. Lisada juurde täisarv tüüpi muutuja, milles on sinu vanus ja kuvada ka see nime taga sulgudes. //


// 15. Lisada juurde boolean tüüpi muutuja nimega eesnimi_algab_vokaaliga ja literaalse väärtusega true või false, vastavalt sellele, kas sinu nimi algab vokaaliga või mitte //

// 16. Refaktoorida skript selliselt, et ees-, perenimi ja vanus asuvad $isik nimelises massiivis liikmetena, mille võtmed on vastavalt eesnimi ja perenimi ja vanus. Kuvada sama teksti (ehk nime koos vanusega sulgudes) välja nüüd sellest massiivist.//


$isik = array('Indro', 'Malleus', '(20)');

echo "Kasutan massiivi: $isik[0] $isik[1] $isik[2] <br>";

// 17. Lisada lehele if tingimus, mis kuvab ekraanil "Nimi algab vokaaliga", kui nimi algab vokaaliga //

if ($eesnimi_algab_vokaaliga==true) {
        echo "Nimi algab vokaaliga";
   }

?>