@extends("blank")
@section("konten")

    ID : {{ $barang_keluar->id }}<br>
    Nama barang : {{ $barang->nama_barang }}<br>
    Tujuan barang : {{ $barang_keluar->tujuan }}<br>
    Penanggung Jawab : {{ $user->name }}<br>
    Tanggal Barang Keluar : {{ $barang_keluar->tanggal_keluar }}<br>
    
@endsection