<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Achieve;
use App\Models\Skill;
use Inertia\Inertia;
use Inertia\Response;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return Response
     */
    public function __invoke()
    {
        $nb_skills = Skill::all()->count();
        $nb_projects = Achieve::all()->count();
        return Inertia::render('Dashboard', compact('nb_skills', 'nb_projects'));
    }
}
