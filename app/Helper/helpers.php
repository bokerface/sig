<?php

use App\Http\Livewire\InputTypeFile;
use App\Models\ExchangeDestination;
use App\Models\ExchangeInstitution;
use App\Models\Meta;
use App\Models\Notification;

function notif_number()
{
    $notification = Notification::where([
        ['receiver', '=', session('user_data')['user_id']],
        ['message', '=', 'Diterima'],
        ['status', '=', 0]
    ])->count();
    return $notification;
}

function admin_notif_number()
{
    $notification = Notification::where([
        ['receiver', '=', "Admin"],
        ['status', '=', 0]
    ])->count();
    return $notification;
}

function admin_notif_number_list()
{
    $notification = Notification::select(
        'notifications.*',
        'submissions.letter_types',
        'letter_types.name as letter_types'
    )
        ->leftJoin('submissions', 'submissions.id', '=', 'notifications.submission_id')
        ->leftJoin('letter_types', 'letter_types.id', '=', 'submissions.letter_types')
        ->where([
            ['receiver', '=', "Admin"],
            ['notifications.status', '=', 0]
        ])
        ->limit(5)
        ->latest()
        ->get();
    return $notification;
}

function submission_has_notif($submission_id)
{
    $notification = Notification::where([
        ['submission_id', '=', $submission_id],
        ['receiver', '=', session('user_data')['user_id']],
        ['status', '=', 0]
    ])->first();

    if (empty($notification)) {
        return false;
    } else {
        return true;
    }
}

function title_ug_thesis($submission_id)
{
    $title = Meta::where([
        ['submission_id', '=', $submission_id],
        ['key', '=', 'title'],
    ])
        ->first()
        ->value;

    return $title;
}

function supervisor_name($submission_id)
{
    $supervisor = Meta::where([
        ['submission_id', '=', $submission_id],
        ['key', '=', 'supervisor'],
    ])
        ->leftJoin('supervisors', 'supervisors.id', '=', 'metas.value')
        ->first();

    if (empty($supervisor)) {
        return null;
    } else {
        return $supervisor->name;
    }
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
