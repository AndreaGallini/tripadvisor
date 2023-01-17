<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreDishCategoryRequest;
use App\Http\Requests\UpdateDishCategoryRequest;
use App\Models\DishCategory;

class DishCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishCategories = DishCategory::all();

        return view('', compact('dishCategories'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDishCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDishCategoryRequest $request)
    {
        $data = $request->validated();
        $new_disheCategory = DishCategory::create($data);



        return redirect()->route('');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DishCategory  $dishCategory
     * @return \Illuminate\Http\Response
     */
    public function show(DishCategory $dishCategory)
    {

        return view('', compact('dishCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DishCategory  $dishCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(DishCategory $dishCategory)
    {
        return view('', compact('dishCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDishCategoryRequest  $request
     * @param  \App\Models\DishCategory  $dishCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDishCategoryRequest $request, DishCategory $dishCategory)
    {
        $data = $request->validated();

        $dishCategory->update($data);
        return redirect()->route('')->with('message', "$dishCategory->name aggiunta con successo.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DishCategory  $dishCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(DishCategory $dishCategory)
    {
        $dishCategory->delete();
        return redirect()->route('')->with('message', "$dishCategory->name rimossa con successo.");
    }
}
