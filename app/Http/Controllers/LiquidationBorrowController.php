<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLiquidationBorrowRequest;
use App\Http\Requests\UpdateLiquidationBorrowRequest;
use App\Models\LiquidationBorrow;

class LiquidationBorrowController extends Controller
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
     * @param  \App\Http\Requests\StoreLiquidationBorrowRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLiquidationBorrowRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LiquidationBorrow  $liquidationBorrow
     * @return \Illuminate\Http\Response
     */
    public function show(LiquidationBorrow $liquidationBorrow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LiquidationBorrow  $liquidationBorrow
     * @return \Illuminate\Http\Response
     */
    public function edit(LiquidationBorrow $liquidationBorrow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLiquidationBorrowRequest  $request
     * @param  \App\Models\LiquidationBorrow  $liquidationBorrow
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLiquidationBorrowRequest $request, LiquidationBorrow $liquidationBorrow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LiquidationBorrow  $liquidationBorrow
     * @return \Illuminate\Http\Response
     */
    public function destroy(LiquidationBorrow $liquidationBorrow)
    {
        //
    }
}
