<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public static $corsiPresenti = [
        "corsi" => [
            [
                "nome-corso" => "powerlifting",
                "orario" => "15:30",
                "docente" => "Alice",
            ],
            [
                "nome-corso" => "ju-jitsu",
                "orario" => "19:00",
                "docente" => "Marius",
            ],
            [
                "nome-corso" => "pilates",
                "orario" => "10:30",
                "docente" => "Mattia",
            ]
        ]
    ];

    public function homepage()
    {
        return view('homepage');
    }
    public function contatti()
    {
        return view('contatti');
    }
    public function corsidisponibili()
    {
        return view('corsi-disponibili', ['corsiPresenti' => self::$corsiPresenti]);
    }
    public function dettaglicorso($riferimento)
    {
        //dd($riferimento);
        foreach (self::$corsiPresenti['corsi'] as $dettagliCorso) {

            if ($riferimento == $dettagliCorso['nome-corso']) {

                return view('dettagli-corso', ['dentroIlCorso' => $dettagliCorso]);
            }
        }
    }
}
