<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang_keluar;
use App\Models\barang;
use App\Models\User;
use Illuminate\Support\Facades\DB; 

class barang_keluarController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }
    public function buatbarang_keluar()
    {
        $id= User::all();
        $data_barang= barang::all();
        return view("barang_keluar/form-input")->with(["user" => $id, 'data_barang'=> $data_barang]);     
    }

    public function simpanbarang_keluar(Request $request)
    {
        $barang_keluar = new barang_keluar();
        $barang_keluar->tanggal_keluar = $request->tanggal_keluar;
        $barang_keluar->tujuan = $request->tujuan;
        $barang_keluar->id_barang = $request->id_barang;
        $barang_keluar->stok_keluar = $request->stok_keluar;
        $barang_keluar->id_user = $request->id_user;
        $barang_keluar->save();

        return redirect(route("semua_barang_keluar", ['id' => $barang_keluar->id]));
    }

    public function tampilbarang_keluar($id)
    {
        $barang_keluar = barang_keluar::find($id);
        $id_user = $barang_keluar->id_user;
        $id_barang = $barang_keluar->id_barang;
        $user = User::find($id_user);
        $barang = barang::find($id_barang);
        return view ("/barang_keluar/tampil")
        ->with(["barang_keluar" => $barang_keluar, "user" => $user,"barang" => $barang]);
    }

    public function semuabarang_keluar()
    {
        $barang_keluar = DB::table('barang_keluar')
        ->join('barang', 'barang_keluar.id_barang', '=', 'barang.id')
        ->join('users', 'barang_keluar.id_user', '=', 'users.id')
        ->select('barang_keluar.*', 'barang_keluar.tanggal_keluar','barang_keluar.stok_keluar', 'barang_keluar.tujuan',  'users.name', 'barang.nama_barang',)
        ->get();
        return view("barang_keluar/semua")->with(["barang_keluar"=> $barang_keluar]);
    }

    public function ubahbarang_keluar($id)
    {
        $data_barang_keluar = barang_keluar::find($id);
        $user = User::all();
        $barang = barang::all();
        return view("barang_keluar/form-edit")->with(["data_barang_keluar"=>$data_barang_keluar,"user"=>$user,"barang"=>$barang]);
    }

    public function updatebarang_keluar(Request $request, $id)
    {
        $barang_keluar = barang_keluar::findOrfail($id);
        $barang_keluar->tanggal_keluar = $request->tanggal_keluar;
        $barang_keluar->tujuan = $request->tujuan;
        $barang_keluar->id_barang = $request->id_barang;
        $barang_keluar->stok_keluar = $request->stok_keluar;
        $barang_keluar->id_user = $request->id_user;
        $barang_keluar->save();

        return redirect(route('semua_barang_keluar'));
    }

    public function hapusbarang_keluar($id)
    {
        barang_keluar::destroy($id);
        return redirect(route('semua_barang_keluar'));
    }
}