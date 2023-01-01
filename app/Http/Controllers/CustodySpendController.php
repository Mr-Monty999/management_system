<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustodySpendRequest;
use App\Http\Requests\UpdateCustodySpendRequest;
use App\Models\Custody;
use App\Models\CustodySpend;

class CustodySpendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $custody = Custody::find($id);
        return view("custodies.spends.index", compact("custody"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $custody = Custody::find($id);
        return view("custodies.spends.create", compact("custody"));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustodySpendRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustodySpendRequest $request, $custodyId)
    {
        $data = $request->all();
        $data["custody_id"] = $custodyId;
        $custodySpend = CustodySpend::create($data);
        return back()->with(["success" => "تم إضافة المنصرف بنجاح"]);
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
    public function edit($custodyId, $custodySpendId)
    {
        $custody = Custody::find($custodyId);
        $custodySpend = CustodySpend::find($custodySpendId);
        return view("custodies.spends.edit", compact("custodySpend", "custody"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustodySpendRequest  $request
     * @param  \App\Models\CustodySpend  $custodySpend
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustodySpendRequest $request, $custodyId, $custodySpendId)
    {
        $data = $request->all();
        // $data["custody_id"] = $custodyId;
        $custodySpend = CustodySpend::find($custodySpendId);
        $custodySpend->update($data);
        return back()->with(["success" => "تم تعديل المنصرف بنجاح"]);
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
