<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProfileRequest;
use App\Models\Admin;
use App\Models\City;
use App\Models\Subject;
use App\Models\Tutor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $tutorsCount = Tutor::count();
        $subjectsCount = Subject::count();
        $citiesCount = City::count();

        return view('admin.dashboard', compact('tutorsCount', 'subjectsCount', 'citiesCount'));
    }

    public function profile(): View
    {
        $admin = Auth::user();

        return view('admin.profile', compact('admin'));
    }

    public function profileUpdate(ProfileRequest $request, Admin $admin): RedirectResponse
    {
        $data = $request->validated();

        if($request->has('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $admin->update($data);

        return Redirect::back();
    }
}
