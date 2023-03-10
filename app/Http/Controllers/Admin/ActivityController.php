<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreActivityRequest;
use App\Http\Requests\UpdateActivityRequest;
use App\Models\Activity;
use Illuminate\Support\Facades\Storage;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $activities = Activity::all();
        return view('admin.activities.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $activities = Activity::all();
        return view('admin.activities.create', compact('activities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreActivityRequest  $request
     */
    public function store(StoreActivityRequest $request)
    {
        $data = $request->validated();
        $slug = Activity::generateSlug($request->name);
        $data['slug'] = $slug;
        if($request->hasFile('img_cover')){
            $path = Storage::disk('public')->put('img_cover', $request->img_cover);
            $data['img_cover'] = $path;
        }
        $new_activity = Activity::create($data);
        if($request->has('tecnologies')){
            $new_activity->tecnologies()->attach($request->tecnologies);
        }
        return redirect()->route('admin.activities.index', $new_activity->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     */
    public function show(Activity $activity)
    {
        return view('admin.activities.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     */
    public function edit(Activity $activity)
    {
        // dd($activity);
        // $activities = Activity::all();
        return view('admin.activities.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActivityRequest  $request
     * @param  \App\Models\Activity  $activity
     */
    public function update(UpdateActivityRequest $request, Activity $activity)
    {
        $data = $request->validated();
        $slug = Activity::createSlug($request->name);
        $data['slug'] = $slug;
        if ($request->hasFile('img')) {
            if ($activity->img_cover) {
                Storage::delete($activity->img_cover);
            }
            $path = Storage::disk('public')->put('img_cover', $request->img);
            $data['img_cover'] = $path;
        }
            $activity->update($data);
        return redirect()->route('', $activity->slug)->with('message', "$activity->name aggiornato");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activity  $activity
     */
    public function destroy(Activity $activity)
    {
        $activity->delete();
        return redirect()->route('admin.activities.index')->with('message', "$activity->name cancellato");
    }
}
