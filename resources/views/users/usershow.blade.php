@extends("blank")

@section("konten")
    ID : {{ $data_user->id }}<br>
    Nama : {{ $data_user->nama }}<br>
    Password :{{ $data_user->password }}<br>
    Jenis Kelamin :{{ $data_user->jenis_kelamin }}<br>
    Nomor Telepon :{{ $data_user->notelp }}<br>
    Alamat :{{ $data_user->alamat }}<br>
    Level :{{ $data_user->level }}<br>
    Remember Token :{{ $data_user->remember_token }}<br>
    Dibuat Pada :{{ $data_user->created_at }}<br>
    Diubah Pada :{{ $data_user->updated_at }}<br>
@endsection