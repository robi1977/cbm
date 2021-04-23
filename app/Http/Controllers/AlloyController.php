<?php

namespace App\Http\Controllers;

use App\Models\Alloy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AlloyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alloys=Alloy::all();
        dump($alloys);
        if(!$alloys){
            return view('dashboard.index')->with('error', 'Brak metali lub stopów do wyświetlenia');
        }
        return view('alloys.index', compact('alloys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->can_writte()){
            return view('alloys.create');
        }
        return redirect('dashboard.index')->with('error', 'Nie masz uprawnień do wprowadzania nowych wpisów');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'symbol'=>'required|unique:alloys|max:50',
            'full_name'=>'required'
        ]);
        if($validator->fails()){
            return redirect('alloys/create')->withErrors($validator)->withInput();
        }

        $alloy = new Alloy;
        $alloy->symbol = $request->get('symbol');
        $alloy->full_name = $request->get('full_name');
        if($request->get('description')){
            $alloy->description = $request->get('description');
        } else {
            $alloy->desctiption = "Nie dotyczy";
        }

        $alloy->save();

        return redirect('alloys')->with('success', "Poprawnie dodano wpis do bazy");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alloy  $alloy
     * @return \Illuminate\Http\Response
     */
    public function show(Alloy $alloy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alloy  $alloy
     * @return \Illuminate\Http\Response
     */
    public function edit(Alloy $alloy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alloy  $alloy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alloy $alloy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alloy  $alloy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alloy $alloy)
    {
        //
    }
}
