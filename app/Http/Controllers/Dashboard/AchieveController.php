<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAchieveFormRequest;
use App\Models\Achieve;
use App\Models\Stack;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;
use Inertia\Response;

class AchieveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $achieves = Achieve::with('stacks')->get();
        $create_url = URL::route('dashboard.achieve.create');
        return Inertia::render('Achieve/Index', compact('achieves', 'create_url'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return Inertia::render('Achieve/Create', ['index_url' => URL::route('dashboard.achieve.index')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAchieveFormRequest $request
     * @return RedirectResponse
     */
    public function store(StoreAchieveFormRequest $request)
    {
        /* $uploadFile = $request->file('image');
        Storage::disk('public')->put('image_projects', $uploadFile);
        $path = asset('storage/image_projects' . $uploadFile->hashName()); */

        $achieve = Achieve::create($request->only('name', 'description', 'git_url', 'link', 'notes'));
        foreach ($request->input('stacks') as $stack) {
            $stack['achieve_id'] = $achieve->id;
            Stack::create($stack);
        }

        return Redirect::route('dashboard.achieve.index')->with('success', 'Great man !!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param Achieve $achieve
     * @return Response
     */
    public function show(Achieve $achieve)
    {
        return Inertia::render('Achieve/Show', compact('achieve'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Achieve $achieve
     * @return Response
     */
    public function edit(Achieve $achieve)
    {
        return Inertia::render('Achieve/Edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Achieve $achieve
     * @return void
     */
    public function update(Request $request, Achieve $achieve)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Achieve $achieve
     * @return void
     */
    public function destroy(Achieve $achieve)
    {
        //
    }
}
