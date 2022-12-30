@extends("blank")
@section("konten")
<form action="{{ route('user_update', ['id' => $data_user->id]) }}" method="post">
@csrf
@method("put")
<div class="col-lg-6 mx-auto">
    <div class="p-5">
        <h3 class="text-center fw-bold">EDIT USER</h3>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" value="{{$data_user->name}}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" value="{{$data_user->password}}" required>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select"  required>
                    @if($data_user->jenis_kelamin == "Perempuan")
                        <option value="Perempuan" selected>Perempuan</option>
                        <option value="Laki-laki" >Laki-laki</option>
                        @else
                        <option value="Laki-laki" selected>Laki-laki</option>
                        <option value="Perempuan" >Perempuan</option>
                    @endif
                </select>
            </div>
            <div class="form-group">
                <label>No Telpon</label>
                <input type="text" name="notelp" class="form-control" value="{{$data_user->notelp}}" required>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" value="{{$data_user->alamat}}" required>
            </div>
            <div class="form-group">
                <label>Level</label>
                <select name="level" class="form-select" required>
                        @if($data_user->level == "Admin")
                        <option value="Admin" selected>Admin</option>
                        <option value="User" >User</option>
                        @else
                        <option value="User" selected>User</option>
                        <option value="Admin" >Admin</option>
                        @endif
                </select>
            </div>
        <button class="btn btn-success btn-user btn-block" type="submit">Update</button>
</div>
</form>
@endsection