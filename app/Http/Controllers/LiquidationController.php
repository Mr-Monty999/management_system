<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustodyRequest;
use App\Http\Requests\UpdateCustodyRequest;
use App\Models\Custody;
use App\Models\Stock;

class CustodyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("custodies.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("custodies.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustodyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustodyRequest $request)
    {
        $data = $request->all();
        $custody = Custody::create($data);
        return back()->with("success", "تم إضافة العهدة بنجاح");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Custody  $custody
     * @return \Illuminate\Http\Response
     */
    public function show(Custody $custody)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Custody  $custody
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $custody = Custody::find($id);
        return view("custodies.edit", compact("custody"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustodyRequest  $request
     * @param  \App\Models\Custody  $custody
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustodyRequest $request,  $id)
    {
        $data = $request->all();
        $custody = Custody::find($id);
        $custody->update($data);
        return back()->with("success", "تم تعديل العهدة بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Custody  $custody
     * @return \Illuminate\Http\Response
     */
    public function destroy(Custody $custody)
    {
        //
    }
}
