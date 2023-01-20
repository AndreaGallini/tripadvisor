<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        // if(Auth::user()->isAdmin()){
        //     $posts = Reservation::paginate(3);

        // } else {
        //     $userId = Auth::id();
        //     $posts = Reservation::where('user_id', $userId)->paginate(3);
        // }

        $reservations = Reservation::all();
        return view('admin.reservations.index', compact('reservations'));

    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        $reservations = Reservation::all();

        return view('admin.reservations.create', compact('reservations'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReservationRequest  $request
     *
     */
    public function store(StoreReservationRequest $request)
    {

        $userId = Auth::id();
        $data = $request->validated();
        $slug = Reservation::generateSlug($request->title);
        $data['slug'] = $slug;
        $data['user_id'] = $userId;

        $new_reservation = Reservation::create($data);

        return redirect()->route('admin.reservations.show', $new_reservation->slug);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     *
     */
    public function show(Reservation $reservation)
    {
        // if(!Auth::user()->isAdmin() && $reservation->user_id !== Auth::id()){
        //     abort(403);
        // }
        return view('admin.reservations.show', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     *
     */
    public function edit(Reservation $reservation)
    {
        // if(!Auth::user()->isAdmin() && $reservation->user_id !== Auth::id()){
        //     abort(403);
        // }
        $reservations = Reservation::all();
        return view('admin.reservations.edit', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReservationRequest  $request
     * @param  \App\Models\Reservation  $reservation
     *
     */
    public function update(UpdateReservationRequest $request, Reservation $reservation)
    {
        // if(!Auth::user()->isAdmin() && $reservation->user_id !== Auth::id()){
        //     abort(403);
        // }

        $data = $request->validated();

        $slug = Reservation::generateSlug($request->title);
        $data['slug'] = $slug;

        $reservation->update($data);
        return redirect()->route('admin.reservations.index')->with('message', "$reservation->title updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     *
     */
    public function destroy(Reservation $reservation)
    {
        // if(!Auth::user()->isAdmin() && $reservation->user_id !== Auth::id()){
        //     abort(403);
        // }

        $reservation->delete();
        return redirect()->route('admin.reservations.index')->with('message', "$reservation->title deleted successfully");

    }
}
