<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLiquidationRequest;
use App\Http\Requests\UpdateLiquidationRequest;
use App\Models\Liquidation;

class LiquidationController extends Controller
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
     * @param  \App\Http\Requests\StoreLiquidationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLiquidationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Liquidation  $liquidation
     * @return \Illuminate\Http\Response
     */
    public function show(Liquidation $liquidation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Liquidation  $liquidation
     * @return \Illuminate\Http\Response
     */
    public function edit(Liquidation $liquidation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLiquidationRequest  $request
     * @param  \App\Models\Liquidation  $liquidation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLiquidationRequest $request, Liquidation $liquidation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Liquidation  $liquidation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Liquidation $liquidation)
    {
        //
    }
}
