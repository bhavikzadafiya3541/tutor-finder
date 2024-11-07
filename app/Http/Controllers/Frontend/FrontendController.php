<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Models\City;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;

class FrontendController extends Controller
{
    public function index(): View
    {
        return view('frontend.index');
    }

    public function profile(): View
    {
        $user = Auth::user();

        $tutor = $user->tutor;

        $selectedCities = $tutor->cities()->pluck('id')->toArray() ?? [];
        $selectedSubjects = $tutor->subjects()->pluck('id')->toArray() ?? [];

        $cities = City::all();

        $subjects = Subject::all();

        return view('frontend.profile', compact('tutor', 'cities', 'subjects', 'selectedCities', 'selectedSubjects'));
    }

    public function profileUpdate(ProfileRequest $request, User $user): RedirectResponse
    {
        $data = $request->validated();

        if ($request->has('profile_picture')) {
            $data['profile_picture'] = $request->file('profile_picture')->store('images/tutor', ['disk' => 'public']);
        }

        $user->update([
            'name' => "{$request->first_name} {$request->last_name}"
        ]);

        $tutor = $user->tutor;

        $tutor->cities()->sync($data['cities']);

        $tutor->subjects()->sync($data['subjects']);

        unset($data['cities']);
        unset($data['subjects']);

        $tutor->update($data);

        return Redirect::back();
    }

    public function updatePassword(Request $request, User $user): RedirectResponse
    {
        $request->validate([
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $user->update([
            'password' => Hash::make($request->password)
        ]);

        return Redirect::back();
    }
}
