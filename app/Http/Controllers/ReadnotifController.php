<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class ReadnotifController extends Controller
{
    public function read($id)
    {
        $notif = Notification::findOrFail($id);
        $notif->status = 1;
        if ($notif->save()) {
            return redirect(route('submission-detail', $notif->id));
        }
    }
}
