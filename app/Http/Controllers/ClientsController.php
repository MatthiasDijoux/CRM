<?php

namespace App\Http\Controllers;

use App\ClientsModel;
use App\ContactsModel;
use App\Http\Resources\ClientsRessource;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;

class ClientsController extends Controller
{
    function index()
    {
        $out = ClientsModel::with([
            'adresse', 'contacts'
        ])->get();

        return ClientsRessource::collection($out);
    }

    function ajouter(Request $request)
    {
        $validator = Validator::make(
            ['name' => 'denis'],
            ['name' => 'required']
      
        )->validate($request, [
            'nom' => 'required',
        ]);

        return json_encode($validator);
    }
}
