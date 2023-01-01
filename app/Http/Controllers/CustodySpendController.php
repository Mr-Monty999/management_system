<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustodySpendRequest;
use App\Http\Requests\UpdateCustodySpendRequest;
use App\Models\CustodySpend;

class CustodySpendController extends Controller
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
     * @param  \App\Http\Requests\StoreCustodySpendRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustodySpendRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustodySpend  $custodySpend
     * @return \Illuminate\Http\Response
     */
    public function show(CustodySpend $custodySpend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustodySpend  $custodySpend
     * @return \Illuminate\Http\Response
     */
    public function edit(CustodySpend $custodySpend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustodySpendRequest  $request
     * @param  \App\Models\CustodySpend  $custodySpend
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustodySpendRequest $request, CustodySpend $custodySpend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustodySpend  $custodySpend
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustodySpend $custodySpend)
    {
        //
    }
}
