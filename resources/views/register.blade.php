<link href="/sb-admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="/sb-admin/css/sb-admin-2.min.css" rel="stylesheet">
<title>Yuliani | Daftar</title>
    <link rel="shortcut icon" href="/sb-admin/gudang.ico" type="image/x-icon">
@if ($errors->any())
    <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
@endif
<form action="{{ route('register_simpan') }}" method="post">
@csrf
<div class="col-lg-6", style="width: auto; margin-left: auto; margin-right: auto">
    <div class="p-5">
        <center><h3>TAMBAHKAN USER</h3></center>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="name" class="form-control form-control-user" placeholder="Masukkan nama ..." required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control form-control-user" placeholder="Masukkan password ..." required>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control form-control-user" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label>No Telpon</label>
            <input type="text" name="notelp" class="form-control form-control-user" placeholder="Masukkan nomor telepon ..." required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control form-control-user" placeholder="Masukkan alamat ..." required>
        </div>
        <div class="form-group">
            <label>Level</label>
            <select name="level" class="form-control form-control-user" required>
                      <option value="">Pilih Level</option>
                      <option value="Admin">Admin</option>
                      <option value="User">User</option>
            </select>
        </div>
        <button class="btn btn-info btn-user btn-block" type="submit">Add User</button>
    </div>
</div>

</form>
