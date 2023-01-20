<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreDisheRequest;
use App\Http\Requests\UpdateDisheRequest;
use App\Models\Dishe;

class DisheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $dishes = Dishe::all();

        return view('admin.dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create(StoreDisheRequest $request)
    {
        $dishes = Dishe::all();
        return view('admin.dishes.create', compact('dishes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDisheRequest  $request
     */
    public function store(StoreDisheRequest $request)
    {
        $data = $request->validated();

        if($request->hasFile('image')){
            $path = Storage::disk('public')->put('image', $request->image);
            $data['image'] = $path;
        }

        $new_dishe = Dishe::create($data);

        return redirect()->route('admin.dishes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dishe  $dishe
     */
    public function show(Dishe $dishe)
    {

        return view('admin.dishes.show', compact('dishe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dishe  $dishe
     */
    public function edit(Dishe $dishe)
    {
        return view('admin.dishes.edit', compact('dishe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDisheRequest  $request
     * @param  \App\Models\Dishe  $dishe
     */
    public function update(UpdateDisheRequest $request, Dishe $dishe)
    {
        $data = $request->validated();

        // if ($request->hasFile('image')) {
        //     if ($dishe->image) {
        //         Storage::delete($activity->img_cover);
        //     }
        //     $path = Storage::disk('public')->put('img_cover', $request->img);
        //     $data['img_cover'] = $path;
        // }

        $dishe->update($data);

        return redirect()->route('')->with('message', "$dishe->name aggiunto con successo.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dishe  $dishe
     */
    public function destroy(Dishe $dishe)
    {

    }
}
