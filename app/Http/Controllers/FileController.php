<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function download(Request $request)
    {
        // dd($request->filename);
        if (Storage::exists('public/' . $request->filename)) {
            return Storage::download('public/' . $request->filename);
        }
        abort(404);
        // return response()->view('errors.404');
    }
}
