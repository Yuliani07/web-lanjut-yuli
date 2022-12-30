@extends("blank")

@section("konten")
    <h3>DATA BARANG</h3>
    ID barang : {{ $data_barang->id }}<br>
    nama barang :{{ $data_barang->nama_barang }}<br>
    Lokasi barang :{{ $data_barang->lokasi_barang }}<br>
    Stok barang :{{ $data_barang->stok }}<br>
    Ditambahkan Pada :{{ $data_barang->created_at }}<br>
    Diubah Pada :{{ $data_barang->updated_at }}<br>
@endsection