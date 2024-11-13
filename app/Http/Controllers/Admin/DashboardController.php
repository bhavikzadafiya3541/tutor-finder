<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Subject;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        $subjectsCount = Subject::count();
        $citiesCount = City::count();

        return view('admin.dashboard', compact('subjectsCount', 'citiesCount'));
    }
}
