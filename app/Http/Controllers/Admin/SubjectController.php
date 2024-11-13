<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubjectStoreRequest;
use App\Http\Requests\SubjectUpdateRequest;
use App\Models\Subject;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $subjects = Subject::all();

        return view('admin.subject.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.subject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubjectStoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        Subject::create($data);

        return Redirect::route('admin.subjects.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        return view('admin.subject.create', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubjectUpdateRequest $request, Subject $subject): RedirectResponse
    {
        $data = $request->validated();

        $subject->update($data);

        return Redirect::route('admin.subjects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject): RedirectResponse
    {
        $subject->delete();

        return Redirect::route('admin.subjects.index');
    }
}
