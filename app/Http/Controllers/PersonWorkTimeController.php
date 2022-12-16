<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonWorkTimeRequest;
use App\Http\Requests\UpdatePersonWorkTimeRequest;
use App\Models\PersonWorkTime;

class PersonWorkTimeController extends Controller
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
        return view("people.work-times.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePersonWorkTimeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonWorkTimeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonWorkTime  $personWorkTime
     * @return \Illuminate\Http\Response
     */
    public function show(PersonWorkTime $personWorkTime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonWorkTime  $personWorkTime
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonWorkTime $personWorkTime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePersonWorkTimeRequest  $request
     * @param  \App\Models\PersonWorkTime  $personWorkTime
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonWorkTimeRequest $request, PersonWorkTime $personWorkTime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonWorkTime  $personWorkTime
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonWorkTime $personWorkTime)
    {
        //
    }
}
