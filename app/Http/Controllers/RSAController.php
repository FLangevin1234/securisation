<?php

namespace App\Http\Controllers;

use App\Services\RSAService;
use Illuminate\Http\Request;

class RSAController extends Controller
{
    public function index(RSAService $service){
        return view('rsa')->with(['encrypted' => $service->chiffrer('Bonjour')]);
    }
}
