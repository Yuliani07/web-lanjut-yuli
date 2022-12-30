@extends("blank")

@section("konten")

    <form action="{{ route('update_barang_keluar', ['id' => $data_barang_keluar->id]) }}" method="post">
        @csrf
        @method("put")
        <div class="col-lg-6", style="width: auto; margin-left: auto; margin-right: auto">
            <div class="p-5">
                <center><h3>Edit Barang Keluar</h3></center>
                <div class="form-group">
                    <label>Tanggal barang keluar</label>
                    <input type="date" name="tanggal_keluar" class="form-control" value="{{$data_barang_keluar->tanggal_keluar}}" required>
                </div>
                <div class="form-group">
                    <label>Tujuan</label>
                    <input type="text" name="tujuan" class="form-control" value="{{$data_barang_keluar->tujuan}}" required>
                </div>
                <div class="form-group">
                    <label>Nama Barang</label>
                    <select name="id_barang" class="form-control" required>
                        @foreach($barang as $data)
                            @if($data_barang_keluar->id_user == $data->id)
                            <option value="{{$data->id}}" selected>{{$data->nama_barang}}</option>
                            @else
                            <option value="{{$data->id}}" >{{$data->nama_barang}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Jumlah Stok Barang Keluar</label>
                    <input type="text" name="stok_keluar" class="form-control" value="{{$data_barang_keluar->stok_keluar}}" required>
                </div>

                <div class="form-group">
                    <label>Penanggung Jawab</label>
                    <select name="id_user" class="form-control" required>
                        @foreach($user as $data)
                            @if($data_barang_keluar->id_user == $data->id)
                            <option value="{{$data->id}}" selected>{{$data->name}}</option>
                            @else
                            <option value="{{$data->id}}" >{{$data->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            <button class="btn btn-info btn-barang btn-block" type="submit">Edit Barang Keluar</button>
        </div>
    </form>


@endsection