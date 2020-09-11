<?php

namespace App\Http\Controllers;

use App\Cycle;
use Illuminate\Http\Request;

class CycleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cycle=Cycle::all();
        return view('cycle.index', compact('cycle'));//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('cycle.create'); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData=request()->validate(['name'=>'required','color'=>'required','company'=>'required']);
        $cycle = new Cycle;
        // $cycle->name= request('name');
        // $cycle->color= request('color');
        // $cycle->company= request('company');
        // $cycle->save();
        Cycle::create($validatedData);
        return redirect('/cycle');
        //return $request->all();//
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cycle  $cycle
     * @return \Illuminate\Http\Response
     */
    public function show(Cycle $cycle)
    {
        return view('cycle.show',compact('cycle'));//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cycle  $cycle
     * @return \Illuminate\Http\Response
     */
    public function edit(Cycle $cycle)
    {
        return view('cycle.edit',compact('cycle'));//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cycle  $cycle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cycle $cycle)
    {
        $validatedData=request()->validate(['name'=>'required','color'=>'required','company'=>'required']);
        //$cycle->name= request('name');
        //$cycle->color= request('color');
        //$cycle->company= request('company');

        //$cycle->save();
        $cycle->update($validatedData);
        return redirect('/cycle');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cycle  $cycle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cycle $cycle)
    {
                $cycle->delete();
        return redirect('/cycle');
    }
}
