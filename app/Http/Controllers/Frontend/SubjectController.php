<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View as FacadesView;
use Illuminate\View\View;

class SubjectController extends Controller
{
    public function subjects(Request $request): mixed
    {
        $tutors = Tutor::query();

        if($request->ajax()) {
            $keyword = $request->input('keyword');
            $tutors = $tutors->where(function ($query) use ($keyword) {
                $query->where('intro', 'like', '%' . $keyword . '%')
                    ->orWhereHas('cities', function ($q) use ($keyword) {
                        $q->where('name', 'like', '%' . $keyword . '%');
                    })
                    ->orWhereHas('subjects', function ($q) use ($keyword) {
                        $q->where('name', 'like', '%' . $keyword . '%');
                    })
                    ->orWhereHas('user', function ($q) use ($keyword) {
                        $q->where('name', 'like', '%' . $keyword . '%');
                    });
            })
            ->paginate(6);

            $html = FacadesView::make('frontend.subjects.tutor-records', compact('tutors'))->render();

            return Response::json(['success' => true, 'html' => $html]);
        }

        $tutors = $tutors->paginate(6);

        return view('frontend.subjects.index', compact('tutors'));
    }

    public function subjectTutor(Tutor $tutor): View
    {
        return view('frontend.subjects.tutor', compact('tutor'));
    }
}
