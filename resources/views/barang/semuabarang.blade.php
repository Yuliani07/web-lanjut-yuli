@extends("blank")
@section("konten")

<table class="table">
    <h1>SEMUA BARANG</h1>
    <a href="{{ route('tambahbarang') }}" class="btn btn-primary mb-3">Tambah barang</a>
    <thead>
        <tr>
            <th scope="col">ID barang</th>
            <th scope="col">Kode barang</th>
            <th scope="col">nama barang</th>
            <th scope="col">Lokasi barang</th>
            <th scope="col">Stok</th>
            <th scope="col">Ditambahkan Pada</th>
            <th scope="col">Diedit Pada</th>
            <th scope="col">Edit</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_barang as $data_barang)
            <td>{{$data_barang->id}}</td>
            <td>{{$data_barang->kode_barang}}</td>
            <td>{{$data_barang->nama_barang}}</td>
            <td>{{$data_barang->nama_rak}}</td>
            <td>{{$data_barang->stok}}</td>
            <td>{{$data_barang->created_at}}</td>
            <td>{{$data_barang->updated_at}}</td>
            <td>
                <form action = "{{ route('hapusbarang', ['id' => $data_barang->id])}}" method="post">
                    <a href="{{ route('editbarang', ['id' => $data_barang->id]) }}" class = "btn btn-warning btn-sm">Edit  </a>
                    <a href="{{ route('showbarang', ['id' => $data_barang->id]) }}" class = "btn btn-success btn-sm">Show</a>
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
                </form>
</td>
        </tr>
</body>
        @endforeach
</table>
@endsection 