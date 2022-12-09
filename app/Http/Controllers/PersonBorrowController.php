<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonBorrowRequest;
use App\Http\Requests\UpdatePersonBorrowRequest;
use App\Models\PersonBorrow;

class PersonBorrowController extends Controller
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
     * @param  \App\Http\Requests\StorePersonBorrowRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonBorrowRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonBorrow  $personBorrow
     * @return \Illuminate\Http\Response
     */
    public function show(PersonBorrow $personBorrow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonBorrow  $personBorrow
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonBorrow $personBorrow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePersonBorrowRequest  $request
     * @param  \App\Models\PersonBorrow  $personBorrow
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonBorrowRequest $request, PersonBorrow $personBorrow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonBorrow  $personBorrow
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonBorrow $personBorrow)
    {
        //
    }
}
