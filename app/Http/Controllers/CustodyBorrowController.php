<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustodyBorrowRequest;
use App\Http\Requests\UpdateCustodyBorrowRequest;
use App\Models\Custody;
use App\Models\CustodyBorrow;

class CustodyBorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $custody = Custody::find($id);
        return view("custodies.borrows.index", compact("custody"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($custodyId)
    {
        $custody = Custody::find($custodyId);
        return view("custodies.borrows.create", compact("custody"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustodyBorrowRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustodyBorrowRequest $request, $custodyId)
    {
        $data = $request->all();
        $data["custody_id"] = $custodyId;
        $custodyBorrow = CustodyBorrow::create($data);
        return back()->with(["success" => "تم إضافة السلفية بنجاح"]);
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
    public function edit($custodyId,  $custodyBorrowId)
    {
        $custody = Custody::find($custodyId);
        $custodyBorrow = CustodyBorrow::find($custodyBorrowId);
        return view("custodies.borrows.edit", compact("custodyBorrow", "custody"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustodyBorrowRequest  $request
     * @param  \App\Models\CustodyBorrow  $custodyBorrow
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustodyBorrowRequest $request, $custodyId, $custodyBorrowId)
    {

        $data = $request->all();
        $data["custody_id"] = $custodyId;
        $custodyBorrow = CustodyBorrow::find($custodyBorrowId);
        $custodyBorrow->update($data);
        return back()->with(["success" => "تم تعديل السلفية بنجاح"]);
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
