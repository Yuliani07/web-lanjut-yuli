@extends("blank")

@section("konten")

<form action="{{ route('simpan_barang_keluar') }}" method="post">
@csrf
<div class="col-lg-6", style="width: auto; margin-left: auto; margin-right: auto">
        <div class="p-5">
            <center><h3>TAMBAHKAN Barang Keluar</h3></center>
            <div class="form-group">
                <label>Tanggal barang_keluar</label>
                <input type="date" name="tanggal_keluar" class="form-control form-control-barang" placeholder="Masukkan tanggal pemnijaman ..." required>
            </div>
            <div class="form-group">
                <label>Tujuan Barang Keluar</label>
                <input type="text" name="tujuan" class="form-control form-control-barang" placeholder="Masukkan Tujuan barang keluar ..." required>
            </div>
            <div class="form-group">
                <label>Nama Barang</label>
                <select class="form-select" name="id_barang" aria-label="Default select example">
                    @foreach($data_barang as $data)
                    <option value="{{$data->id}}"> {{$data->nama_barang}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Jumlah Stok Barang Keluar</label>
                <input type="number" name="stok_keluar" class="form-control form-control-barang" placeholder="Masukkan Jumlah stok barang keluar ..." required>
            </div>
            <div class="form-group">
                <label>Penanggung Jawab</label>
                    <select class="form-select" name="id_user" aria-label="Default select example">
                        @foreach($user as $data)
                        <option value="{{$data->id}}"> {{$data->name}}</option>
                        @endforeach
                    </select>
            </div>
        <button class="btn btn-info btn-barang btn-block" type="submit">Tambah barang_keluar</button>
    </div>
</form>


@endsection