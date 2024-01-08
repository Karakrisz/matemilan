<?php

function homeController()
{


    return [
        "home",
        [
            "title" => "Kezdőlap"
        ]
    ];
}

function bankController()
{


    return [
        "bank",
        [
            "title" => "Bank"
        ]
    ];
}

function insuranceController()
{


    return [
        "biztositas",
        [
            "title" => "Biztosítás"
        ]
    ];
}

function checkoutController()
{


    return [
        "penztarak",
        [
            "title" => "Pénztárak"
        ]
    ];
}

function savingsController()
{


    return [
        "megtakaritas",
        [
            "title" => "Megtakarítás"
        ]
    ];
}

function notFoundController()
{
    return [
        "404", [
            "title" => "A keresett oldal nem található."
        ]
    ];
}