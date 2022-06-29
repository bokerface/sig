<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;

class ValidSubmissionController extends Controller
{
    public function show($submission_id)
    {
        $submission = Submission::findOrFail($submission_id);

        return view(
            'admin.valid-submission',
            [
                'submissions' => $submission
            ]
        );
    }
}
