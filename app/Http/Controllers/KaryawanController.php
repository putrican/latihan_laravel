<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function index(){
        $karyawans = Karyawan::all();
        return view('karyawan.index',['karyawans' => $karyawans]);
    }

    
    // public function index(){
    //     return "Halaman Karyawan";
    // }


    public function show($id){
        $karyawans = Karyawan::find($id);
        return view('karyawan.show', compact('karyawans'));
    }
    public function create(){
        return view ('karyawan.create');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'nik' => 'required|size:8|unique:karyawans,nik',
            'nama' => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'bagian' => 'required',
            'alamat' => 'required'
        ]);
        Karyawan::create($validatedData);
        // $karyawan = new Karyawan();
        // $karyawan->nik = $validatedData['nik'];
        // $karyawan->nama = $validatedData['nama'];
        // $karyawan->jenis_kelamin = $validatedData['jenis_kelamin'];
        // $karyawan->bagian = $validatedData['bagian'];
        // $karyawan->alamat = $validatedData['alamat'];
        // $karyawan->save();

        $request->session()->flash('pesan', "Data {$validatedData['nama']}Berhasil Disimpan");
        return redirect()->route('karyawans.index');
    }

    public function edit(Karyawan $karyawan){
        return view('karyawan.edit',compact('karyawan'));
    }

    public function update(Request $request, Karyawan $karyawan){
        $validatedData = $request->validate([
            'nik' => 'required|size:8|unique:karyawans,nik,'.$karyawan->id,
            'nama' => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'bagian' => 'required',
            'alamat' => ''
        ]);

        $karyawan->update($validatedData);
        return redirect()->route('karyawans.index',['karyawan'=> $karyawan->id])->with('pesan',"Update data {$validatedData['nama']} Berhasil");
    }

    public function destroy(Karyawan $karyawan){
        $karyawan->delete();
        return redirect()->route('karyawans.index')->with('pesan',"Hapus Data $karyawan->nama Berhasil");
    }
    

}
