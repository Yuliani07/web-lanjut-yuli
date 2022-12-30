@extends("blank")
@section("konten")

    ID : {{ $barang_masuk->id }}<br>
    Nama barang :{{ $barang->nama_barang }}<br>
    Stok barang :{{ $barang->stok }}<br>
    Penanggung Jawab :{{ $user->name }}<br>
    Tanggal Barang Masuk :{{ $barang_masuk->tanggal_masuk }}<br>
    
@endsection