<?php

namespace App\Http\Controllers;
use App\Models\Microsite;
use Illuminate\Http\Request;

class MicrositeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function micrositeUser()
    {
        $data = Microsite::all();
        return view('User.MicrositeUser', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(odel $odel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(odel $odel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, odel $odel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(odel $odel)
    {
        //
    }
}
