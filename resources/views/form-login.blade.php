<link href="/sb-admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="/sb-admin/css/sb-admin-2.min.css" rel="stylesheet">
<title>Yuliani | Login</title>
    <link rel="shortcut icon" href="/sb-admin/gudang.ico" type="image/x-icon">
<form action="{{ route("proses_login") }}" method="post">
 @csrf

 <body class="bg-gradient-primary">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-6", style="width: auto; margin-left: auto; margin-right: auto">
        <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="p-5">
            <center><h3>LOGIN PAGE</h3></center>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="name" class="form-control form-control-user" placeholder="Masukkan username ..." required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control form-control-user" placeholder="Masukkan password ..." required>
            </div>
            <button class="btn btn-info btn-user btn-block" type="submit">Log In</button>
            <div class="text-center">
                <a class="small" href="{{route('register')}}">Buat Account!</a>
            </div>
            <div class="text-center">
                <a class="small" href="login">Sudah punya akun? Login!</a>
            </div>
        </div>
        </div>
    </div>
    </div>
    </div>
</body>
</form>
