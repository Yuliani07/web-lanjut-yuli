@extends("blank")

@section("konten")

    <form action="{{ route('simpanbarang')}}" method="post">
        @csrf
        <div class="col-lg-6", style="width: auto; margin-left: auto; margin-right: auto">
            <div class="p-5">
                <center><h3>TAMBAHKAN barang</h3></center>
                <div class="form-group">
                    <label>Kode Barang</label>
                    <input type="text" name="kode_barang" class="form-control form-control-barang" placeholder="Masukkan nama barang ..." required>
                </div>
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control form-control-barang" placeholder="Masukkan nama barang ..." required>
                </div>
                <div class="form-group">
                    <label>Jenis Barang</label>
                    <input type="text" name="jenis_barang" class="form-control form-control-barang" placeholder="Masukkan nama barang ..." required>
                </div>
                <div class="form-group">
                    <label>Tanggal Masuk Barang</label>
                    <input type="date" name="tanggal_masuk" class="form-control form-control-barang" placeholder="Masukkan nama barang ..." required>
                </div>
                <div class="form-group">
                    <label>Distributor</label>
                    <input type="text" name="distributor" class="form-control form-control-barang" placeholder="Masukkan nama barang ..." required>
                </div>
                <div class="form-group">
                    <label>Lokasi Barang</label>
                    <select name="id_rak" class="form-control form-control-barang" required>
                        @foreach ($rak as $data)
                        <option value="{{$data->id}}">{{$data->nama_rak}}</option>
                        @endforeach
                    </select>
                 </div>
                 <div class="form-group">
                    <label>Stok Barang</label>
                    <input type="number" name="stok" class="form-control" required>
                 </div>
                <button class="btn btn-info btn-barang btn-block" type="submit">Tambah Barang</button>
            </div>
        </div>
 
    </form>


@endsection