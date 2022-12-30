@extends("blank")
@section("konten")

    <form action="{{ route('update_barang_masuk', ['id' => $data_barang_masuk->id]) }}" method="post">
        @csrf
        @method("put")
        <div class="col-lg-6", style="width: auto; margin-left: auto; margin-right: auto">
            <div class="p-5">
                <center><h3>UPDATE DATA BARANG MASUK</h3></center>
                <div class="form-group">
                    <label>Tanggal Masuk Barang</label>
                    <input type="date" name="tanggal_masuk" class="form-control form-control-barang" value="{{$data_barang_masuk->tanggal_masuk}}" required>
                </div>
                <div class="form-group">
                    <label>Nama Barang</label>
                    <select name="id_barang" class="form-control form-control-barang" required>
                        @foreach($barang as $data)
                            @if($data_barang_masuk->id_user == $data->id)
                            <option value="{{$data->id}}" selected>{{$data->nama_barang}}</option>
                            @else
                            <option value="{{$data->id}}" >{{$data->nama_barang}}</option>
                            @endif
                        @endforeach
                    </select>
                 </div>
                 <div class="form-group">
                    <label>Jumlah Stok Masuk</label>
                    <input type="text" name="stok_masuk" class="form-control" value="{{$data_barang_masuk->stok_masuk}}" required>
                </div>
                <div class="form-group">
                    <label>Distributor</label>
                    <select class="form-select" name="distributor" aria-label="Default select example">
                        @if($data_barang_masuk->distributor == "1")
                            <option value="1" selected>PT ABC President Indonesia</option>
                            <option value="2">PT Java Prima Abadi</option>
                            <option value="3">PT Djojonegoro C-1000</option>
                        @elseif($data_barang_masuk->distributor == "2")
                            <option value="1">PT ABC President Indonesia</option>
                            <option value="2" selected>PT Java Prima Abadi</option>
                            <option value="3">PT Djojonegoro C-1000</option>
                        @else
                            <option value="1">PT ABC President Indonesia</option>
                            <option value="2">PT Java Prima Abadi</option>
                            <option value="3" selected>PT Djojonegoro C-1000</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label>Penanggung Jawab</label>
                    <select name="id_user" class="form-control form-control-barang" required>
                        @foreach($user as $data)
                            @if($data_barang_masuk->id_user == $data->id)
                            <option value="{{$data->id}}" selected>{{$data->name}}</option>
                            @else
                            <option value="{{$data->id}}" >{{$data->name}}</option>
                            @endif
                        @endforeach
                    </select>
                 </div>
            <button class="btn btn-info btn-barang btn-block" type="submit">Tambah Peminjaman</button>
        </div>
    </form>


@endsection