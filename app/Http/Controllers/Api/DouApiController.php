<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DouApiController extends Controller
{
   public function __invoke()
   {
        return (new Api())->getApi()
        ->get('https://api.escavador.com/api/v1/busca')
        ->json();
   }
}
