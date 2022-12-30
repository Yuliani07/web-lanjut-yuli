@extends("blank")
@section("konten")

<table class="table">
    <h1>Data Barang Masuk</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
        </div>
    @endif
    <a href="{{ route('buat_barang_masuk')}}" class="btn btn-primary mb-4">Tambah Data Barang Masuk</a>
    <thead>
        <tr>
            <th scope="col">Tanggal Masuk</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Jumlah Stok Masuk</th>
            <th scope="col">Distributor</th>
            <th scope="col">Penanggung Jawab</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($barang_masuk as $data)

            <td>{{$data->tanggal_masuk}}</td>
            <td>{{$data->nama_barang}}</td>
            <td>{{$data->stok_masuk}}</td>
            <td>{{$data->distributor}}</td>
            <td>{{$data->name}}</td>
            <td>
                <form action = "{{ route('hapus_barang_masuk', ['id' => $data->id])}}" method="post">
                <a href="{{ route('ubah_barang_masuk', ['id' => $data->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                <a href="{{ route('tampil_barang_masuk', ['id' => $data->id]) }}" class="btn btn-success btn-sm">Show</a>
                    @csrf
                    @method("delete")
                    <button class="btn btn-danger btn-sm" type="submit" 
                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">Hapus</button>
                </form>
            </td>
        </tr>
</body>
        @endforeach
</table>
@endsection 