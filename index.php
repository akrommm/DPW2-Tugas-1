<?php

class animal
{
    public $jumlah_kaki, $bisa_terbang;
}

class kucing extends animal
{
    function bersuara()
    {
        return "meonggg";
    }
}

class sapi extends animal
{
    function bersuara()
    {
        return "moooo";
    }
}

class elang extends animal
{
    function bersuara()
    {
        return "miiip";
    }
}

class  tikus extends animal
{
    function bersuara()
    {
        return "citcitt";
    }
}

echo "Animal <br>";
echo "<hr>";
// kucing
$boncel = new kucing;
$boncel->jumlah_kaki = 4;
$boncel->bisa_terbang = "tidak bisa terbang";

echo "boncel adalah kucing <br>";
echo "punya kaki sebanyak:" . $boncel->jumlah_kaki . "<br>";
echo $boncel->bisa_terbang . "<br>";
echo "suaranya: " . $boncel->bersuara() . "<br>";

echo "<hr>";

// sapi
$ocan = new sapi;
$ocan->jumlah_kaki = 4;
$ocan->bisa_terbang = "tidak bisa terbang";

echo "ocan adalah sapi <br>";
echo "punya kaki sebanyak:" . $ocan->jumlah_kaki . "<br>";
echo $ocan->bisa_terbang . "<br>";
echo "suaranya: " . $ocan->bersuara() . "<br>";

echo "<hr>";

// elang
$zetu = new elang;
$zetu->jumlah_kaki = 2;
$zetu->bisa_terbang = "bisa terbang";

echo "zetu adalah elang <br>";
echo "punya kaki sebanyak:" . $zetu->jumlah_kaki . "<br>";
echo $zetu->bisa_terbang . "<br>";
echo "suaranya: " . $zetu->bersuara() . "<br>";

echo "<hr>";

// tikus
$mickey = new tikus;
$mickey->jumlah_kaki = 2;
$mickey->bisa_terbang = "tidak bisa terbang";

echo "mickey adalah tikus <br>";
echo "punya kaki sebanyak:" . $mickey->jumlah_kaki . "<br>";
echo $mickey->bisa_terbang . "<br>";
echo "suaranya: " . $mickey->bersuara() . "<br>";

echo "<hr>";
