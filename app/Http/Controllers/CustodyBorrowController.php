<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustodyBorrowRequest;
use App\Http\Requests\UpdateCustodyBorrowRequest;
use App\Models\CustodyBorrow;

class CustodyBorrowController extends Controller
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
     * @param  \App\Http\Requests\StoreCustodyBorrowRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustodyBorrowRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustodyBorrow  $custodyBorrow
     * @return \Illuminate\Http\Response
     */
    public function show(CustodyBorrow $custodyBorrow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustodyBorrow  $custodyBorrow
     * @return \Illuminate\Http\Response
     */
    public function edit(CustodyBorrow $custodyBorrow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustodyBorrowRequest  $request
     * @param  \App\Models\CustodyBorrow  $custodyBorrow
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustodyBorrowRequest $request, CustodyBorrow $custodyBorrow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustodyBorrow  $custodyBorrow
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustodyBorrow $custodyBorrow)
    {
        //
    }
}
