<?php

// 13. Luua PHP fail nimega serveripoolsed.php, mis kuvab ekraanil sinu eesnime ja perekonnanime. Kumbki nimi kuvatakse eraldi PHP muutujatest, mis on string tüüpi. //
$muutuja1 = "Indro";
$muutuja2 = "Malleus";
$muutuja3 = 20;
$eesnimi_algab_vokaaliga = true;

echo $muutuja1." ".$muutuja2, " ($muutuja3)<br><br>";

// 14. Lisada juurde täisarv tüüpi muutuja, milles on sinu vanus ja kuvada ka see nime taga sulgudes. //


// 15. Lisada juurde boolean tüüpi muutuja nimega eesnimi_algab_vokaaliga ja literaalse väärtusega true või false, vastavalt sellele, kas sinu nimi algab vokaaliga või mitte //

// 16. Refaktoorida skript selliselt, et ees-, perenimi ja vanus asuvad $isik nimelises massiivis liikmetena, mille võtmed on vastavalt eesnimi ja perenimi ja vanus. Kuvada sama teksti (ehk nime koos vanusega sulgudes) välja nüüd sellest massiivist.//


$isik = array('Indro', 'Malleus', '(20)');

echo "Kasutan massiivi: $isik[0] $isik[1] $isik[2] <br><br>";

// 17. Lisada lehele if tingimus, mis kuvab ekraanil "Nimi algab vokaaliga", kui nimi algab vokaaliga //

if ($eesnimi_algab_vokaaliga==true) {
        echo "Nimi algab vokaaliga";
   }

// 18. Refaktoorida massiiv objektiks, milles on lisaks massiivis olnud liikmetele ka atribuut (ehk omadus) sugu,//
// väärtusega vastavalt kas mees või naine. Instantseerida see objekt ja kuvada selle objekti omadusi esialgses echo reas,
// mis kuvas nime välja, asendades seal olnud massiivi //

class Isik {

    public $mina = array("ees" => "", "pere" => "", "vanus" => 0, "sugu" => "");

    function Isik($ees, $pere, $vanus, $sugu)
    {
        $this->mina["ees"] = $ees;
        $this->mina["pere"] = $pere;
        $this->mina["vanus"] = $vanus;
        $this->mina["sugu"] = $sugu;
    }
}
$inimene = new Isik("Indro", "Malleus", 20, "mees");
echo "<p>" . $inimene->mina["ees"] . " " . $inimene->mina["pere"] . " (" . $inimene->mina["vanus"] . ")</p>";
?>


<?php

// 19. nimi algab vokaaliga: //

$vowels = array('A', 'E', 'I', 'O', 'U', 'Õ', 'Ä', 'Ö', 'Ü', 'a', 'e', 'i', 'o', 'u', 'õ', 'ä', 'ö', 'ü');
if (in_array(substr($inimene->mina["ees"], 0, 1), $vowels)) {
        $eesnimi_algab_vokaaliga = true;
    } else {
    $eesnimi_algab_vokaaliga = false;
}
if ($eesnimi_algab_vokaaliga) {
    echo "<p>Nimi algab vokaaliga</p>";
}

// 20. php float numbrite liitmine //

$a = 1.23;
$b = 2.34;
$float_sum   =  $a + $b;
echo "1.23 + 2.34 = ".  $float_sum ."<br>";;
?>

<?php
// 21. kuvada koer=terjer //
if(isset($_GET['koer'])){
        echo $_GET['koer']."<br>";
}

// 22. form input element //
?>

<form action="?" method="post">
    <input name="kass">
    <input type="submit">
</form>

<?php
if(isset($_POST['kass'])){
        echo 'Kass oli: '.$_POST['kass'].'<br>';
} ?>
