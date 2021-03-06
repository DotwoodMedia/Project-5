<?php

namespace App\Http\Controllers;

use App\Models\Prestatie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PrestatiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Prestatie::All();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::emergency('Prestatie aangemaakt');
        $prestatie = Prestatie::create($request->all());

        return response()->json([
            'message' => 'Prestatie succesvol aangemaakt',
            'prestatie' => $prestatie
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prestatie = Prestatie::where('id', $id)->get();
        return response()->json($prestatie);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prestatie = Prestatie::where('id', $id);
        $prestatie->update($request->all());

        return response()->json([
            'message' => 'Prestatie succesvol geupdate',
            'prestatie' => $prestatie
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $prestatie = Prestatie::where('id', $id);
        $prestatie->delete();

        return response()->json([
            'message' => 'Prestatie verwijderd'
        ]);
    }
}
