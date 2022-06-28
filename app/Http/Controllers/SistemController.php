<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SistemRequest;
use App\Models\Sistem;



class SistemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Sistem::all();
        return  view('sistem.index', compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sistem.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SistemRequest $request)
    {
        $data = $request->all();

        Sistem::create($data);
        $request->session()->flash('pesan', "Data Berhasil Di simpan");
        return redirect()->route('sistem.index');
        
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
    public function edit(Sistem $sistem)
    {
        ($sistem->find($sistem->id)->all());
        return view('sistem.edit', compact('sistem'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SistemRequest $request, Sistem $sistem)
    {
        $dataId = $sistem->find($sistem->id);
        $data = $request->all();

        $dataId->update($data);
        session()->flash('edit', "Data {$data['nama']} Berhasil di Ubah");
        return redirect()->route('sistem.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Sistem::findOrfail($id);
        $item->delete();

        session()->flash('destroy', "Data {$item['nama']} Berhasil di Hapus");
        return redirect()->route('sistem.index');
    }
}
