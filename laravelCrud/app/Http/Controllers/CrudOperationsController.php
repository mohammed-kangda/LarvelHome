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
        $data = CrudOperations::with('getCountry')->paginate('5');
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
        $requestData['profile'] = $imgName;
        $data = CrudOperations::create($requestData);

        return redirect()->route('crud.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CrudOperations  $crudOperations
     * @return \Illuminate\Http\Response
    */

    // displaying data to user

    public function show(CrudOperations $id)
    {
        $countries = Country::all();
        // print_r($id->hobbies);
        return view('Template.show',compact('countries','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CrudOperations  $crudOperations
     * @return \Illuminate\Http\Response
     */
    public function edit(CrudOperations $id)
    {
        $countries = Country::all();
        return view('Template.update',compact('countries','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CrudOperations  $crudOperations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CrudOperations $id)
    {
       echo "<pre>";
       print_r($id->toArray());
       print_r($request->except(['_token'])); // new

       $id->first_name = $request->first_name;
       $id->last_name = $request->last_name;
       $id->email = $request->email;
       $id->contact = $request->contact;
       $id->gender = $request->gender;
       $id->hobbies = $request->hobbies;
       $id->address = $request->address;
       $id->country = $request->country;
       if(isset($request->profile)){
            $imgName = $request->profile->getClientOriginalName();
            $request->profile->move(public_path('profiles'),$imgName);
            $id->profile = $imgName;
       }
       $id->save();
       return redirect()->route('crud.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CrudOperations  $crudOperations
     * @return \Illuminate\Http\Response
     */
    public function destroy(CrudOperations $id)
    {
        echo "<pre>";
        $data = CrudOperations::find($id->id)->delete();
        print_r($data);
        return redirect()->route('crud.index');
    }
}
