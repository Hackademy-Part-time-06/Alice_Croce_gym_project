<?php

namespace App\Http\Controllers;

use App\Mail\InfoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


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

    public function send(Request $request)
    {
        //validazione dei dati

        $request->validate([
            "name" => "required|string",
            "email" => "required|email",
            "message" => "required|min:10",
        ]);
        //se sono tutti validi allora continua:
        $data = [
            "firstname" => $request->name,
            "email" => $request->input('email'), //da chiedere
            "phone" => $request->phone,
            "message" => $request->message,

        ];
        //dd($data);
        Mail::to($request->email)->send(new InfoMail($data));
        return redirect()->route('homepage');
    }
}
