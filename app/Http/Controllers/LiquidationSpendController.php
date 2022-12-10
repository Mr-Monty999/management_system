<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLiquidationSpendRequest;
use App\Http\Requests\UpdateLiquidationSpendRequest;
use App\Models\LiquidationSpend;

class LiquidationSpendController extends Controller
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
     * @param  \App\Http\Requests\StoreLiquidationSpendRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLiquidationSpendRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LiquidationSpend  $liquidationSpend
     * @return \Illuminate\Http\Response
     */
    public function show(LiquidationSpend $liquidationSpend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LiquidationSpend  $liquidationSpend
     * @return \Illuminate\Http\Response
     */
    public function edit(LiquidationSpend $liquidationSpend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLiquidationSpendRequest  $request
     * @param  \App\Models\LiquidationSpend  $liquidationSpend
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLiquidationSpendRequest $request, LiquidationSpend $liquidationSpend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LiquidationSpend  $liquidationSpend
     * @return \Illuminate\Http\Response
     */
    public function destroy(LiquidationSpend $liquidationSpend)
    {
        //
    }
}
