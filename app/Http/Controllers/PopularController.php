<?php

namespace App\Http\Controllers;

use App\Popular;
use Illuminate\Http\Request;

class PopularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $populars=Popular::paginate();
        return view('dashboard.populars.index',compact('populars'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.populars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $popularData = $request->all();
            Popular::create($popularData);
            return redirect()->route('populars.create')->with('message', 'Data has been inserted successfully');
        }catch (QueryException $e){
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Popular  $popular
     * @return \Illuminate\Http\Response
     */
    public function show(Popular $popular)
    {
        return view('dashboard.populars.show',compact('popular'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Popular  $popular
     * @return \Illuminate\Http\Response
     */
    public function edit(Popular $popular)
    {
        return view('dashboard.populars.edit')->with('popular',$popular);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Popular  $popular
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Popular $popular)
    {
        $updateData=$request->all();
        $popular->update($updateData);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Popular  $popular
     * @return \Illuminate\Http\Response
     */
    public function destroy(Popular $popular)
    {
        //
    }
}
