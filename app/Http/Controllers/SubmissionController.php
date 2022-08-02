<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function destroy($submission_id)
    {
        $submission = Submission::find($submission_id);
        $submission->delete();
        return redirect()->back();
    }
}
