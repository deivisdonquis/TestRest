<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientSoap;

class ApiWalletController extends Controller
{
    public function registro(Request $request ) 
    {
        $client = new ClientSoap;
        return json_encode( $client->registro($request->documento, $request->celular, $request->nombre, $request->email)    );
    }

    public function consulta(Request $request)
    {
        $client = new ClientSoap;
        return json_encode($client->consultar($request->documento, $request->celular));
    }

   

    public function recargar(Request $request ) 
    {
        
        $client = new ClientSoap;
        return json_encode( $client->recargar($request->documento, $request->celular, $request->saldo )  );
        
    }

    public function pagar(Request $request ) 
    {
        
        $client = new ClientSoap;
        return json_encode( $client->pagar($request->documento, $request->celular, $request->monto )  );
        
    }

     public function confirmar(Request $request ) 
    {
        
        $client = new ClientSoap;
        return json_encode( $client->confirmar($request->documento, $request->token, $request->idsesion  ) );
        
    }

}
