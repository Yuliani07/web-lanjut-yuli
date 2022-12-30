@extends("blank")
@section("konten")

<table class="table">
    <h1>Semua Barang Keluar</h1>
    <a href="{{ route('buat_barang_keluar')}}" class="btn btn-primary mb-3">Tambah Barang Keluar</a>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tanggal Barang Keluar</th>
            <th scope="col">Tujuan Barang</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Jumlah Stok Barang Keluar</th>
            <th scope="col">Penanggung Jawab</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($barang_keluar as $data)

            <td>{{$data->id}}</td>
            <td>{{$data->tanggal_keluar}}</td>
            <td>{{$data->tujuan}}</td>
            <td>{{$data->nama_barang}}</td>
            <td>{{$data->stok_keluar}}</td>
            <td>{{$data->name}}</td>
            <td>
            <form action = "{{ route('hapus_barang_keluar', ['id' => $data->id])}}" method="post">
            <a href="{{ route('ubah_barang_keluar', ['id' => $data->id]) }}" class="btn btn-warning btn-sm">Edit </a>
            <a href="{{ route('tampil_barang_keluar', ['id' => $data->id]) }}" class="btn btn-success btn-sm">Show</a>


            @if ($errors->any())
            <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
            @endif

            @csrf
            @method("delete")
            <button class="btn btn-danger btn-sm" type="submit" 
            onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">Hapus</button>
</form></td>
        </tr>
</body>
        @endforeach
</table>
@endsection 