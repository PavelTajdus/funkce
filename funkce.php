<?php

function nazev_funkce($argument, $dalsi_argument = 5)
{
    // něco vykonej
    // může vrátit výsledek přes return
    return $argument + $dalsi_argument;
}

// Argumenty
function sude($cislo)
{
    // kontrola, jestli je cislo sude
    if (($cislo % 2) == 0) {
        return true;
    }

    return false;
}

// vysledek funkce vložím do podmínky a vypíšu nějaký text
if (sude(5)) {
    echo "číslo je sudé";
} else {
    echo "číslo je liché";
}

function secti($cislo, $druhe_cislo)
{
    return $cislo + $druhe_cislo;
}

// rozdíl mezi funkcí a procedurou
// procedura nemá return
function moje_funkce()
{
    return 5;
}

// Procedury
function moje_procedura()
{
    echo "Ahoj";
}

function pozdrav($jmeno)
{
    echo "Ahoj " . $jmeno;
}


// příklady využití funkcí
// Vygenerování formulářového pole
function input($typ, $jmeno, $popisek, $vyzadovano = false)
{
    if ($vyzadovano) {
        $required = "required";
    } else {
        $required = "";
    }

    $input = "
    <label for='$jmeno'>$popisek</label>
    <input type='$typ' name='$jmeno' $required>
    ";

    return $input;
}

function uk_nav($pole, $trida = "")
{
    if ($trida) {
        $class = "class='$trida'";
    } else {
        $class = "";
    }

    $menu = "<ul $class>";
    foreach ($pole as $klic => $hodnota) {
        if (!is_array($hodnota)) {
            $menu .= "<li><a href='#'>$hodnota</a></li>";
        } else {
            $menu .= "<li><a href='#'>$klic</a>";
            $menu .= uk_nav($hodnota, "uk-child");
            $menu .= "</li>";
        }
    }
    $menu .= "</ul>";

    return $menu;
}
