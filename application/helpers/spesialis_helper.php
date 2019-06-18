<?php

function spesialis($akronim = '')
{
    $spesialis = array(
        "ANK" => "Anak",
        "GIG" => "Gigi",
        "THT" => "THT",
        "UMM" => "Umum",
        "MAT" => "Mata"
    );

    if (!isset($spesialis[$akronim])) {
        return $spesialis;
    }

    return $spesialis[$akronim];
}