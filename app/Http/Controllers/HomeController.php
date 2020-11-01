<?php

namespace App\Http\Controllers;

use App\Models\Achieve;
use App\Models\Skill;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function __invoke()
    {
        $skills = Skill::all();
        $achieves = Achieve::with('stacks')->get();
        return Inertia::render('Home', compact('skills', 'achieves'));
    }
}
