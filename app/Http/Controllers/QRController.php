<?php

namespace App\Http\Controllers;


use SimpleSoftwareIO\QrCode\Facades\QrCode;
use SimpleSoftwareIO\QrCode\Generator;


class QRController extends Controller
{
    public function index()
    {
    }

    public function generate($id)
    {
        $qrcode = new Generator;
        $qr = $qrcode->size(500)->generate($id);
        return view('welcome', [
            'qr' => $qr
        ]);
    }
}
