<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\CrudOperations;
use Illuminate\Http\Request;

class CrudOperationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CrudOperations::with('getCountry')->get();
        return view('Template.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    # displaying rtegistration form to user

    public function create()
    {
        $countries = Country::all();
        return view('Template.registration',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData =  $request->except(['_token']);
        $imgName = $request->profile->getClientOriginalName();
        $request->profile->move(public_path('profiles'),$imgName);
        $store = CrudOperations::create($requestData);
        return redirect()->route('crud.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CrudOperations  $crudOperations
     * @return \Illuminate\Http\Response
     */
    public function show(CrudOperations $crudOperations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CrudOperations  $crudOperations
     * @return \Illuminate\Http\Response
     */
    public function edit(CrudOperations $crudOperations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CrudOperations  $crudOperations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CrudOperations $crudOperations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CrudOperations  $crudOperations
     * @return \Illuminate\Http\Response
     */
    public function destroy(CrudOperations $crudOperations)
    {
        //
    }
}
