<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TutorStoreRequest;
use App\Http\Requests\TutorUpdateRequest;
use App\Models\Tutor;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\View\View;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $tutors = Tutor::all();

        return view('admin.tutor.index', compact('tutors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.tutor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TutorStoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $user = User::create([
            "name" => "{$data['first_name']} {$data['last_name']}",
            "email" => $data['email'],
            "email_verified_at" => date('Y-m-d h:i:s'),
            "password" => Hash::make($data['password']),
            "remember_token" => Str::random(80)
        ]);

        unset($data['password']);

        $data['user_id'] = $user->id;

        if ($request->has('profile_picture')) {
            $data['profile_picture'] = $request->file('profile_picture')->store('images/tutor', ['disk' => 'public']);
        }

        Tutor::create($data);

        return Redirect::route('admin.tutors.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tutor $tutor): View
    {
        return view('admin.tutor.create', compact('tutor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TutorUpdateRequest $request, Tutor $tutor): RedirectResponse
    {
        $data = $request->validated();

        $tutor->update($data);

        return Redirect::route('admin.tutors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tutor $tutor): RedirectResponse
    {
        $tutor->delete();

        return Redirect::route('admin.tutors.index');
    }
}
