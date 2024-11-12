<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Tutor;
use Illuminate\View\View;

class SubjectController extends Controller
{
    public function subjects(): View
    {
        $subjects = Subject::all();

        return view('frontend.subjects.index', compact('subjects'));
    }

    public function subjectTutor(Tutor $tutor): View
    {
        $subjects = Subject::all();

        return view('frontend.subjects.tutor', compact('subjects'));
    }
}
