<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $skills = Skill::all();
        return Inertia::render('Skill/Index', [
            'skills' => $skills
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate(['name' => 'required|unique:skills']);
        Skill::create($request->only('name', 'category', 'notes'));

        return Redirect::route('dashboard.skill.index')->with('success', '15 min de vidéo et déjà un nouveau Skill, Bahhh Bravo !');
    }

    /**
     * Display the specified resource.
     *
     * @param Skill $skill
     * @return void
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Skill $skill
     * @return void
     */
    public function edit(Skill $skill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Skill $skill
     * @return void
     */
    public function update(Request $request, Skill $skill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Skill $skill
     * @return void
     */
    public function destroy(Skill $skill)
    {
        //
    }
}
