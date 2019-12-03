<?php

namespace App\Http\Controllers;

use App\Pregnancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PregnancyController extends Controller
{

    public function __construct()
    {
        if(!\Session::has('pregnancy')) \Session::put('pregnancy', array());    
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $pregnancies = Pregnancy::all();
        // dd($pregnancies);

        return view('user', compact('pregnancies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('store.history');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request, [
          'week' => 'required',
          'status' => 'required',
        ]);
        
        $pregnancy = Pregnancy::create([
            'week' => $request->get('week'),
            'status' => $request->get('status')
        ]);
        
        return redirect()->route('home.index')->with('success_message', 'Agregado a tu historial');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pregnancy $pregnancy)
    {
        return $pregnancy;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pregnancy $pregnancy)
    {
        return view('store.history-edit', compact('pregnancy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pregnancy $pregnancy)
    {
        $this->validate($request, [
          'wek' => 'required',
          'status' => 'required',
        ]);

        $pregnancy->fill($request->all());
        $pregnancy->week = Input::get('week');
        $pregnancy->status = Input::get('status');
        
        $updated = $pregnancy->save();
        
        return redirect()->route('pregnancy.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pregnancy $pregnancy)
    {
        //
    }
}
