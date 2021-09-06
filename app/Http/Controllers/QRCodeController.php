<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use QrCode;

class QRCodeController extends Controller
{
    //
    public function simpleQr()
    {
        return QrCode::size(300)->generate('https://www.triciclos.net');
    }
}
