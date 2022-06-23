<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use PDF;
use Illuminate\Support\Facades\Session;
use App\Models\Submission;
use Illuminate\Support\Facades\DB;

class DownloadTranscript extends Controller
{
    public function index()
    {
    }

    public function downloadPdf($id)
    {

        $submission = $this->submission = Submission::findOrFail($id);

        $transcript = Http::withHeaders([])->post('https://krs.umy.ac.id/WebApi/Info/GetDetailTranskrip', [
            'ClientId' => 'SiGov',
            'Credential' => 'F3BC28F09FC5F33B453030D763B06369EC708AED70634A5901C93CF7244FFB35',
            'NIM' => Session::get('user_data.user_id'),
        ])->object();

        $data_mhs = array(
            'name' => Session::get('user_data.fullname'),
            'student_id' => Session::get('user_data.user_id'),
            'dateofbirth' => Session::get('user_data.dateofbirth')
        );

        // dd($transcript);

        // return view('download-transcript', compact('data_mhs', 'transcript', 'submission'));

        $pdf = PDF::loadView('download-transcript', compact(
            'transcript',
            'data_mhs',
            'submission'
        ))->output();

        return response()->streamDownload(
            fn () => print($pdf),
            "transcript" . Session::get('user_data.user_id') . ".pdf"
        );
    }

    public function download_recommendation_passport($id)
    {

        $submission = $this->submission = Submission::findOrFail($id);
        $meta = $this->meta =DB::table('metas')
                ->select('metas.*')
                ->where('submission_id', '=', $id)
                ->get()->toArray();

        $data_mhs = array(
            'name' => Session::get('user_data.fullname'),
            'student_id' => Session::get('user_data.user_id')
        );

        // dd($submission);

        return view('download-recommendation-passport', compact('data_mhs', 'submission', 'meta'));

        $pdf = PDF::loadView('download-recommendation-passport', compact(
            'data_mhs',
            'submission'
        ))->output();

        return response()->streamDownload(
            fn () => print($pdf),
            "transcript" . Session::get('user_data.user_id') . ".pdf"
        );
    }

    public function download_letter_active_student($id)
    {


        $submission = $this->submission = Submission::findOrFail($id);
        
        $data_mhs = array(
            'name' => Session::get('user_data.fullname'),
            'student_id' => Session::get('user_data.user_id')
        );

        // dd($submission);

        return view('download-letter-active-student', compact('data_mhs', 'submission'));

        $pdf = PDF::loadView('download-letter-active-student', compact(
            'data_mhs',
            'submission'
        ))->output();

        return response()->streamDownload(
            fn () => print($pdf),
            "transcript" . Session::get('user_data.user_id') . ".pdf"
        );
    }
}
