@extends("blank")

@section("konten")

<form action="{{ route('updaterak', ['id' => $data_rak->id]) }}" method="post">
    @csrf
    <div class="col-lg-6", style="width: auto; margin-left: auto; margin-right: auto">
        <div class="p-5">
            <center><h3>TAMBAHKAN RAK</h3></center>
            <div class="form-group">
                <label>Nama Rak</label>
                <input type="text" name="nama_rak" class="form-control form-control-barang" value="{{$data_rak->nama_rak}}" required>
            </div>
            <div class="form-group">
                    <label>Lokasi Rak</label>
                    <input type="text" name="lokasi_rak" class="form-control form-control-barang" value="{{$data_rak->lokasi_rak}}" required>
                </div>
            <button class="btn btn-info btn-barang btn-block" type="submit">Update Rak</button>
        </div>
    </div>
</form>


@endsection