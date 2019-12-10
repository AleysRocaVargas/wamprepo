<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OneSignal;

use function PHPSTORM_META\type;

class NotificacionesController extends Controller
{
    //
    public function notificar(Request $request){


        
        $cant = $request->input('cantEmails');
        $datos = [];

        for ($i=0; $i < $cant; $i++) { 
            $datos[$i] = ["key" => "email", "relation" => "=", "value" => $request->input('email'.$i)];
        }

        //dd(print_r($datos));

        
        OneSignal::sendNotificationUsingTags(
            "Some Message",
            $datos,
            $url = null,
            $data = null,
            $buttons = null,
            $schedule = null
        );

    }
}
