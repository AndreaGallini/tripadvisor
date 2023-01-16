<?php

namespace App\Http\Controllers;

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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDishCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDishCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DishCategory  $dishCategory
     * @return \Illuminate\Http\Response
     */
    public function show(DishCategory $dishCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DishCategory  $dishCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(DishCategory $dishCategory)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DishCategory  $dishCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(DishCategory $dishCategory)
    {
        //
    }
}
