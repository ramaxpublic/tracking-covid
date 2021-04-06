<?php

namespace App\Http\Controllers;

use App\Models\Kasus;
use App\Models\Rw;
use Illuminate\Http\Request;

class KasusController extends Controller
{
    public function index()
    {
        $kasus = Kasus::with('rw.kelurahan.kecamatan.kota.provinsi')->orderBy('id','DESC')->get();
        // dd($kasus);
        return view('admin.kasus.index',compact('kasus'));
    }

    public function create()
    {
        $rw = Rw::all();
        return view('admin.kasus.create',compact('rw'));
    }

    public function store(Request $request)
    {
        $positif = (int)$request->positif;
        $meninggal = $request->positif-$request->sembuh;
        $request->validate([
            'positif' => 'required|numeric|min:1',
            'sembuh' => "required|numeric|min:1|max:$positif",
            'meninggal' => "required||numeric|min:1|max:$meninggal",
            'tanggal' => 'required',
        ], [
            'positif.required' => 'Data tidak boleh kosong',
            'positif.min' => 'Jumlah positif tidak boleh kurang dari 1',
            'sembuh.required' => 'Data tidak boleh kosong',
            'sembuh.min' => 'Jumlah sembuh tidak boleh kurang dari 1',
            'sembuh.max' => 'Jumlah sembuh tidak boleh melebihi jumlah Positif',
            'meninggal.required' => 'Data tidak boleh kosong',
            'meninggal.min' => 'Jumlah meninggal tidak boleh kurang dari 1',
            'meninggal.max' => 'Jumlah meninggal tidak boleh melebihi jumlah Positif dan Sembuh ',
            'tanggal.required' => 'Data tidak boleh kosong',
        ]);
        $kasus = new kasus();
        $kasus->id_rw = $request->id_rw;
        // $kasus->reaktif = $request->reaktif;
        $kasus->positif = $request->positif;
        $kasus->sembuh = $request->sembuh;
        $kasus->meninggal = $request->meninggal;
        $kasus->tanggal = $request->tanggal;
        $kasus->save();
        return redirect()->route('kasus.index')->with(['success'=>'Data berhasil di Input!']);
    }

    public function show($id)
    {
        $kasus = Kasus::findOrFail($id);
        return view('admin.kasus.show',compact('kasus'));
    }


    public function edit($id)
    {
        $rw = Rw::all();
        $kasus = Kasus::findOrFail($id);
        return view('admin.kasus.edit',compact('kasus','rw'));
    }


    public function update(Request $request, $id)
    {
        $positif = (int)$request->positif;
        $meninggal = $request->positif-$request->sembuh;
        $request->validate([
            'positif' => 'required|numeric|min:1',
            'sembuh' => "required|numeric|min:1|max:$positif",
            'meninggal' => "required|numeric|min:1|max:$meninggal",
        ], [
            'positif.required' => 'Data tidak boleh kosong',
            'positif.min' => 'Jumlah positif tidak boleh kurang dari 1',
            'sembuh.required' => 'Data tidak boleh kosong',
            'sembuh.min' => 'Jumlah sembuh tidak boleh kurang dari 1',
            'sembuh.max' => 'Jumlah sembuh tidak boleh melebihi jumlah Positif',
            'meninggal.required' => 'Data tidak boleh kosong',
            'meninggal.min' => 'Jumlah meninggal tidak boleh kurang dari 1',
            'meninggal.max' => 'Jumlah meninggal tidak boleh melebihi jumlah Positif dan Sembuh ',
        ]);
        $kasus = Kasus::findOrFail($id);
        $kasus->id_rw = $request->id_rw;
        // $kasus->reaktif = $request->reaktif;
        $kasus->positif = $request->positif;
        $kasus->sembuh = $request->sembuh;
        $kasus->meninggal = $request->meninggal;
        $kasus->tanggal = $request->tanggal;
        $kasus->save();
        return redirect()->route('kasus.index')->with(['info'=>'Data berhasil di Edit!']);
    }

    public function destroy($id)
    {
        $kasus = Kasus::findOrFail($id);
        $kasus->delete();
        return redirect()->route('kasus.index')->with(['error'=>'Data berhasil di Hapus!']);
    }
}
