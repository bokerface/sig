<?php

namespace App\Http\Controllers;

use App\Models\Meta;
use App\Models\Submission;
use Illuminate\Http\Request;

class ValidSubmissionController extends Controller
{
    public function show($submission_id)
    {
        $submission = Submission::findOrFail($submission_id);
        $metas = Meta::where('submission_id', '=', $submission_id)->get();

        return view(
            'admin.valid-submission',
            [
                'submission' => $submission,
                'metas' => $metas
            ]
        );
    }
}
