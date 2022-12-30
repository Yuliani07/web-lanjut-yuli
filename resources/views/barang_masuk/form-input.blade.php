@extends("blank")

@section("konten")
    <form action="{{ route('simpan_barang_masuk') }}" method="post">
    @csrf
    <div class="col-lg-6", style="width: auto; margin-left: auto; margin-right: auto">
            <div class="p-5">
                <center><h3>Tambahkan Barang Masuk</h3></center>
                <div class="form-group">
                    <label>Tanggal Masuk</label>
                    <input type="date" name="tanggal_masuk" class="form-control form-control-barang" placeholder="Masukkan tanggal pemnijaman ..." required>
                </div>
                <div class="form-group">
                    <label>Barang</label>
                    <select class="form-select" name="id_barang" aria-label="Default select example">
                        @foreach($data_barang as $data)
                        <option value="{{$data->id}}"> {{$data->nama_barang}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Jumlah Stok Barang Masuk</label>
                    <input type="number" name="stok_masuk" class="form-control form-control-barang" placeholder="Masukkan Jumlah stok barang masuk ..." required>
                </div>
                <div class="form-group">
                    <label>Distributor (Asal Barang)</label>
                    <select class="form-select" name="distributor" aria-label="Default select example">
                        <option value="1">PT ABC President Indonesia</option>
                        <option value="2">PT Java Prima Abadi</option>
                        <option value="3">PT Djojonegoro C-1000</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Penanggung Jawab</label>
                    <select class="form-select" name="id_user" aria-label="Default select example">
                        @foreach($user as $data)
                        <option value="{{$data->id}}"> {{$data->name}}</option>
                        @endforeach
                    </select>
                </div>
            <button class="btn btn-info btn-barang btn-block" type="submit">Tambah Barang Masuk</button>
        </div>
    </form>

@endsection