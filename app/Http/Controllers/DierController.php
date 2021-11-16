<?php

namespace App\Http\Controllers;
use App\Http\Requests\dierRequest;
use App\Models\Song;
use Illuminate\Http\Request;
use  App\Models\dierModel;

class DierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', ['dieren'=> dierModel::all('id','dier' ,'chipnummer')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(dierRequest $request)
    {
        dierModel::create($request -> except('_token'));

     //   return redirect()->route('dieren');
        return view('index', ['dieren'=> dierModel::all('dier', 'id', 'chipnummer')]);
        $validated = $request->validate();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('show', ['dieren' => dierModel::find($id)]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dieren = Song::find($id);
        return view('dieren.update', ['dieren' => $dieren]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(dierRequest $request, $id)
    {
        $song = dierModel::find($id);
        $song->update($request->only(['dier', 'chipnummer']));
        return redirect()->route('dieren.edit', ['id' => $id]);
        $validated = $request->validate();


    }

//    public function update(dierRequest $request, $id)
//    {
//
//        Fiets::find($id)->update($request->except(['_token', '_method']));
//
//        return redirect()->route('dieren.index');
//    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        dierModel::find($id)->delete();
        dierModel::destroy($id);
        //return redirect('dieren');
//        DB::delete('delete from songs where id = ?',[$id]);
        return redirect()->route('dieren.index');


    }
}
