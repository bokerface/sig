<?php

use App\Http\Livewire\InputTypeFile;
use App\Models\ExchangeDestination;
use App\Models\ExchangeInstitution;
use App\Models\Notification;

function notif_number()
{
    $notification = Notification::where([
        ['receiver', '=', session('user_data')['user_id']],
        ['message', '=', 'Diterima']
    ])->count();
    return $notification;
}

function admin_notif_number()
{
    $notification = Notification::where([
        ['receiver', '=', "Admin"],
    ])->count();
    return $notification;
}

function admin_notif_number_list()
{
    $notification = Notification::where([
        ['receiver', '=', "Admin"],
    ])
        // ->limit(5)
        // ->latest()
        ->get();
    return $notification;
}

function destination_name($destination_id)
{
    $exchange_destination = ExchangeDestination::findOrFail($destination_id);
    return $exchange_destination->destination;
}

function institution_name($institution_id)
{
    $exchange_institution = ExchangeInstitution::findOrFail($institution_id);
    return $exchange_institution->institution;
}

// function fields($item)
// {
//     if ($item->type == 'text') {
//         if (!empty($item->comment)) {
//             return view('fields.input-type-text', ['item' => $item]);
//         }
//     } elseif ($item->type == 'file') {
//         if (!empty($item->comment)) {
//             // return view('fields.input-type-file', ['item' => $item]);
//             return InputTypeFile::class;
//         }
//     }
// }
