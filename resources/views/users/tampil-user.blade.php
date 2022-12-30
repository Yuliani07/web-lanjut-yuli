@extends("blank")

@section("konten")

<table class="table">
<a href="{{ route('user_input') }}">Tambah User</a>
    <thead>
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Nomor Telpon</th>
            <th scope="col">Alamat</th>
            <th scope="col">Level</th>
            <th scope="col">Edit</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_user as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->jenis_kelamin}}</td>
            <td>{{$user->notelp}}</td>
            <td>{{$user->alamat}}</td>
            <td>{{$user->level}}</td>
            <td>
            <form action = "{{ route('user_hapus', ['id' => $user->id])}}" method="post">
                <a href="{{ route('user_edit', ['id' => $user->id]) }}" class = "btn btn-warning btn-sm">Edit</a>
                <a href="{{ route('user_show', ['id' => $user->id]) }}" class = "btn btn-success btn-sm" >Show</a>
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