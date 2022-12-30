<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rak;

class rakController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }
    
    public function buatrak()
    {
        return view("rak/form-input");
    }

    public function simpanrak(Request $request)
    {
        $rak = new rak();
        $rak->nama_rak = $request->get("nama_rak");
        $rak->lokasi_rak = $request->get("lokasi_rak");
        $rak->save();

        return redirect(route("semuarak", ['id' => $rak->id]));
    }

    public function tampilrak($id)
    {
        $rak = rak::find($id);

        return view("rak/tampil")->with("rak", $rak);
    }

    public function semuarak()
    {
        $data = rak::all();
        return view("rak/semua")->with("data", $data);
    }

    public function ubahrak($id)
    {
        $data_rak = rak::find($id);
        $rak = rak::all();
        return view ("rak/form-edit")
        ->with(["data_rak" => $data_rak, "rak" => $rak]);
    }

    public function updaterak(Request $request, $id)
    {
        $rak = rak::findOrFail($id);
        $rak->nama_rak = $request->get("nama_rak");
        $rak->lokasi_rak = $request->get("lokasi_rak");
        $rak->save();

        return redirect(route("semuarak"));
    }

    public function hapusrak($id)
    {
        rak::destroy($id);
        return redirect(route('semuarak'));
    }
}