<?php

namespace App\Helpers;

class Cleaners {
    public static function cleanText($teks)
    {
        $teks = str_replace("'", "", $teks);
        $teks = str_replace("-", "", $teks);
        $teks = str_replace(")", "", $teks);
        $teks = str_replace("(", "", $teks);
        $teks = str_replace("\"", "", $teks);
        $teks = str_replace("/", "", $teks);
        $teks = str_replace("=", "", $teks);
        $teks = str_replace(".", "", $teks);
        $teks = str_replace(",", "", $teks);
        $teks = str_replace(":", "", $teks);
        $teks = str_replace(";", "", $teks);
        $teks = str_replace("!", "", $teks);
        $teks = str_replace("?", "", $teks);

        return $teks;
    }
}