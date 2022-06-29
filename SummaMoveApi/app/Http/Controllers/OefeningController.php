<?php

namespace App\Http\Controllers;

use App\Models\Oefening;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OefeningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Oefening::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $oefening = Oefening::create($request->all());

        return response()->json([
            'message' => 'Oefening succesvol aangemaakt',
            'oefening' => $oefening
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
        $oefening = Oefening::where('id', $id)->get();
        return response()->json($oefening);
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
        $oefening = Oefening::where('id', $id)->get();
        $oefening->update($request->all());

        return response()->json([
            'message' => 'Oefening succesvol geupdate',
            'oefening' => $oefening
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
        $oefening = Oefening::where('id', $id);
        $oefening->delete();

        return response()->json([
            'message' => 'Oefening verwijderd'
        ]);
    }
}
