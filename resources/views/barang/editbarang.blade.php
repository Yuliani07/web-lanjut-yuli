@extends("blank")

@section("konten")

    <form action="{{ route('updatebarang', ['id' => $data_barang->id]) }}" method="post">
        @csrf
        @method("put")
        <div class="col-lg-6", style="width: auto; margin-left: auto; margin-right: auto">
            <div class="p-5">
                <center><h3>TAMBAHKAN BARANG</h3></center>
                <div class="form-group">
                    <label>Kode Barang</label>
                    <input type="text" name="kode_barang" class="form-control form-control-barang" value="{{$data_barang->kode_barang}}" required>
                </div>
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control form-control-barang" value="{{$data_barang->nama_barang}}" required>
                </div>
                <div class="form-group">
                    <label>Jenis Barang</label>
                    <input type="text" name="jenis_barang" class="form-control form-control-barang" value="{{$data_barang->jenis_barang}}" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Masuk Barang</label>
                    <input type="date" name="tanggal_masuk" class="form-control form-control-barang" value="{{$data_barang->tanggal_masuk}}" required>
                </div>
                <div class="form-group">
                    <label>Distributor</label>
                    <input type="text" name="distributor" class="form-control form-control-barang" value="{{$data_barang->distributor}}" required>
                </div>
                <div class="form-group">
                    <label>Lokasi Barang</label>
                    <select name="id_rak" class="form-control form-control-barang" value="{{$data_barang->id_rak}}"required>
                    <option value="">Lokasi barang</option>
                    @foreach ($rak as $data)
                        <option value="{{$data->id}}">{{$data->nama_rak}}</option>
                        @endforeach
                    </select>
                 </div>
                 <div class="form-group">
                    <label>Stok Barang</label>
                    <input type="number" name="stok" class="form-control" value="{{$data_barang->stok}}" required>
                 </div>
                <button class="btn btn-info btn-barang btn-block" type="submit">Edit barang</button>
            </div>
        </div>
    </form>


@endsection