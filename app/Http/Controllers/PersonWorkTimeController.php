<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonWorkTimeRequest;
use App\Http\Requests\UpdatePersonWorkTimeRequest;
use App\Models\Person;
use App\Models\PersonWorkTime;

class PersonWorkTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $person = Person::find($id);
        return view("people.work-times.index", compact("person"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $person = Person::find($id);
        return view("people.work-times.create", compact("person"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePersonWorkTimeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonWorkTimeRequest $request)
    {
        $data = $request->all();
        $personWorkTime = PersonWorkTime::create($data);
        return back()->with(["success" => "تم إضافة الدوام بنجاح"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonWorkTime  $personWorkTime
     * @return \Illuminate\Http\Response
     */
    public function show($personId, PersonWorkTime $personWorkTime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonWorkTime  $personWorkTime
     * @return \Illuminate\Http\Response
     */
    public function edit($personId,  $personWorkTimeId)
    {
        $person = Person::find($personId);
        $personWorkTime = PersonWorkTime::find($personWorkTimeId);
        return view("people.work-times.edit", compact("personWorkTime", "person"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePersonWorkTimeRequest  $request
     * @param  \App\Models\PersonWorkTime  $personWorkTime
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonWorkTimeRequest $request, $personId, $personWorkTimeId)
    {
        $personWorkTime = PersonWorkTime::find($personWorkTimeId);
        $personWorkTime->update($request->all());
        return back()->with(["success" => "تم تعديل الدوام بنجاح"]);
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
