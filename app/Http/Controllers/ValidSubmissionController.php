<?php

namespace App\Http\Controllers;

use App\Models\Meta;
use App\Models\Submission;
use Illuminate\Http\Request;

class ValidSubmissionController extends Controller
{
    public function show($submission_id)
    {
        $submission = Submission::select(
            'submissions.*',
            'letter_types.name as letter_type',
            'v_students.fullname',
            'v_students.studentid',
        )
            ->leftJoin('letter_types', 'letter_types.id', '=', 'submissions.letter_types')
            ->leftJoin('v_students', 'v_students.studentid', '=', 'submissions.student_id')
            ->find($submission_id);
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
