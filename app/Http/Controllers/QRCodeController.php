<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use QrCode;

class QRCodeController extends Controller
{
    public function simpleQr()
    {
        return QrCode::size(300)->generate('https://www.triciclos.net');
    }

    public function colorQr()
    {
        return QrCode::size(300)
            ->backgroundColor(255, 55, 0)
            ->generate('Color QR code example');
    }
}
