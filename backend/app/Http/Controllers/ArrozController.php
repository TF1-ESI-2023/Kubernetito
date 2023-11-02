<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arroz;
use Illuminate\Support\Facades\Http;

class ArrozController extends Controller
{
    public function Guardar(Request $request){
        $arroz = new Arroz();
        $arroz->nombre = $request -> post ('nombre');
        $arroz->precio = $request -> post ('precio');
        $arroz->save();

        Http::post('http://mail-api.aplicacioncilla.svc.cluster.local/api/enviar', [
            'from' => 'uno@coso.com',
            'to' => 'otro@coso.com',
            'subject' => $request -> post ('nombre'),
        ]);
        return $arroz;
        
    }

    
}
