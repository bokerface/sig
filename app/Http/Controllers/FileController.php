<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function download($filename)
    {
        $filePath = public_path($filename);
        dd($filePath);
        $headers = ['Content-Type: application/pdf'];
        $fileName = time() . '.pdf';

        return response()->download($filePath, $fileName, $headers);
    }
}
