<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class OefeningenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->has('user')) {
        $token = Session::get('user')['access_token'];
        $oefeningen = Http::withToken($token)
        ->get('http://project5.dotwood.media/api/oefeningen')->json();
        return view('Oefeningen', ['oefeningen' => $oefeningen]);
        }
        else {
            return redirect('/login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (session()->has('user')) {
        return view('Oefeningen');
        }
        else {
            return redirect('/login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (session()->has('user')) {
        $token = Session::get('user')['access_token'];
        $response = Http::withToken($token)->post('http://project5.dotwood.media/api/oefeningen', [
            'naam' => $request->naam,
            'beschrijving' => $request->beschrijving,
            'img' => $request->img,
        ]);

        return view('Homepage');
    } else  {
        return redirect('/login');
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (session()->has('user')) {
        $token = Session::get('user')['access_token'];
        $response = Http::withToken($token)->delete("http://project5.dotwood.media/api/oefeningen/$id");
        return  view('/homepage');
        }
        else    {
            return redirect('/login');
        }
    }
}
