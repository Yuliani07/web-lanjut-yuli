<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use App\Models\rak;
use Illuminate\Support\Facades\DB;  

class barangController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }
    
    public function tampilbarang(){
        $data_barang = barang::all();
        return view("barang/semuabarang")
        ->with("data_barang", $data_barang);
    }

    public function buatbarang()
    {
        return view("barang/tambahbarang");
    }

    public function tambahbarang()
    {
        $rak= rak::all();
        return view("barang/tambahbarang")
        ->with("rak", $rak);
    }

    public function simpanbarang(Request $request)
    {   $data_barang = new barang();
        $data_barang->kode_barang = $request->get("kode_barang");
        $data_barang->nama_barang = $request->get("nama_barang");
        $data_barang->jenis_barang = $request->get("jenis_barang");
        $data_barang->tanggal_masuk = $request->get("tanggal_masuk");
        $data_barang->distributor = $request->get("distributor");
        $data_barang->id_rak  = $request->get("id_rak");
        $data_barang->stok = $request->get("stok");
        $data_barang->save();
        return redirect(route("semuabarang"));
    }

    public function semuabarang()
    {   
        $data_barang = DB::table('barang')
            ->join('rak', 'barang.id_rak', '=', 'rak.id')
            ->select('barang.*', 'barang.kode_barang', 'barang.nama_barang',  'barang.jenis_barang', 'barang.tanggal_masuk', 'barang.distributor', 'rak.nama_rak', 'barang.stok',)
            ->get();
        return view("barang/semuabarang")->with("data_barang", $data_barang);
    }

    public function editbarang($id)
    {
        $data_barang = barang::find($id);
        $rak = rak::all();
        $data_barang_all = barang::all();
        return view ("barang/editbarang")
        ->with(["data_barang" => $data_barang, "rak" => $rak]);
    }

    public function updatebarang(Request $request, $id)
    {
        $data_barang = barang::findOrfail($id);
        $data_barang->kode_barang = $request->get("kode_barang");
        $data_barang->nama_barang = $request->get("nama_barang");
        $data_barang->jenis_barang = $request->get("jenis_barang");
        $data_barang->tanggal_masuk = $request->get("tanggal_masuk");
        $data_barang->distributor = $request->get("distributor");
        $data_barang->id_rak  = $request->get("id_rak");
        $data_barang->stok = $request->get("stok");
        $data_barang->save();
        return redirect(route("semuabarang"));
    }

    public function hapusbarang($id)
    {
        barang::destroy($id);
        return redirect(route('semuabarang'));
    }

    public function showbarang($id){
        $data_barang = barang::find($id);
        return view ("barang/showbarang")
        ->with("data_barang",$data_barang);
    }
}