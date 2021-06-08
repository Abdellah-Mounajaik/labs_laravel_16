<?php

namespace App\Http\Controllers;

use App\Models\HomeCarte;
use App\Models\Icone;
use Illuminate\Http\Request;

class HomeCarteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homecarte = HomeCarte::all();
        return view('admin/pages/homecarte', compact('homecarte'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeCarte  $homeCarte
     * @return \Illuminate\Http\Response
     */
    public function show(HomeCarte $homeCarte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeCarte  $homeCarte
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeCarte $homeCarte)
    {
        $icone = Icone::all();   
        return view('admin.home.edithomecarte', compact('homeCarte','icone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeCarte  $homeCarte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeCarte $homeCarte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeCarte  $homeCarte
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeCarte $homeCarte)
    {
        //
    }
}
