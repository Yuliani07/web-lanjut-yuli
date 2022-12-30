<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang_masuk;
use App\Models\barang;
use App\Models\User;//Import model user
use Illuminate\Support\Facades\DB; 

class barang_masukController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }
    
    public function buatbarang_masuk()
    {
        $id= user::all();
        $data_barang= barang::all();
        return view("barang_masuk/form-input")
        ->with(["user" => $id, 'data_barang'=> $data_barang]);
    }

    public function simpanbarang_masuk(Request $request)
    {
        $barang_masuk = new barang_masuk();
        $barang_masuk->distributor = $request->post("distributor");
        $barang_masuk->tanggal_masuk = $request->post("tanggal_masuk");
        $barang_masuk->id_barang = $request->post("id_barang");
        $barang_masuk->stok_masuk = $request->post("stok_masuk");
        $barang_masuk->id_user = $request->post("id_user");
        $barang_masuk->save();
        return redirect(route("semua_barang_masuk"));
    }

    public function tampilbarang_masuk($id){
        $barang_masuk = barang_masuk::find($id);
        $id_user = $barang_masuk->id_user;
        $id_barang = $barang_masuk->id_barang;
        $user = User::find($id_user);
        $barang = barang::find($id_barang);
        return view ("/barang_masuk/tampil")
        ->with(["barang_masuk"=>$barang_masuk,"user"=>$user,"barang"=>$barang]);
    }

    public function semuabarang_masuk()
    {
        $barang_masuk = DB::table('barang_masuk')
        ->join('barang', 'barang_masuk.id_barang', '=', 'barang.id')
        ->join('users', 'barang_masuk.id_user', '=', 'users.id')
        ->select('barang_masuk.*', 'barang_masuk.tanggal_masuk', 'barang_masuk.distributor',  'users.name', 'barang.nama_barang',)
        ->get();
        return view("barang_masuk/semua")->with("barang_masuk", $barang_masuk);
    }

    public function ubahbarang_masuk($id)
    {
        $data_barang_masuk = barang_masuk::find($id);
        $user = User::all();
        $barang = barang::all();
        return view("barang_masuk/form-edit")->with(["data_barang_masuk"=>$data_barang_masuk,"user"=>$user,"barang"=>$barang]);
    }

    public function updatebarang_masuk(Request $request, $id)
    {
        $barang_masuk = barang_masuk::findOrfail($id);
        $barang_masuk->tanggal_masuk = $request->tanggal_masuk;
        $barang_masuk->id_barang = $request->id_barang;
        $barang_masuk->stok_masuk = $request->stok_masuk;
        $barang_masuk->distributor = $request->distributor;
        $barang_masuk->id_user = $request->id_user;
        $barang_masuk->save();
        return redirect(route("semua_barang_masuk"));
    }

    public function hapusbarang_masuk($id)
    {
        barang_masuk::destroy($id);
        return redirect(route('semua_barang_masuk'));
    }
}