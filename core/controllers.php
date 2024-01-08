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

function servicesController()
{


    return [
        "szolgaltatasok",
        [
            "title" => "Szolgáltatások"
        ]
    ];
}

function contactController()
{


    return [
        "kapcsolat",
        [
            "title" => "Kapcsolat"
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

function pensionController()
{


    return [
        "nyugdij",
        [
            "title" => "Nyugdíj"
        ]
    ];
}

function stateController()
{


    return [
        "allam",
        [
            "title" => "Állam"
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