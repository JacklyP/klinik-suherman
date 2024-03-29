<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Klinik Suherman</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="{{ asset('') }}frontend/assets/img/favicon.png" rel="icon">
        <link href="{{ asset('') }}frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('') }}frontend/assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="{{ asset('') }}frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ asset('') }}frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="{{ asset('') }}frontend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="{{ asset('') }}frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="{{ asset('') }}frontend/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="{{ asset('') }}frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ asset('') }}frontend/assets/css/style.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Custom styles for this template -->
        <link href="signin.css" rel="stylesheet">
    </head>

    <body class="login">
        <div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="position-relative">
                            <div class="card position-absolute top-50 start-50 translate-middle" style="border-radius:40px; width:150%">
                                <div class="card-body p-5">
                                    <div class="section-title">
                                        <h2 class="">Create Account</h2>
                                    </div>
                                    <form class="row g-3" action="{{ route('registerPost') }}" method="post">
                                        @csrf
                                        <div class="col-md-6 p-2">
                                            <label for="nama" class="col-form-label fw-bold">Nama Lengkap</label>
                                            <input type="text" name="nama" class="form-control shadow rounded-4 mt-1  @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama Lengkap" style="height: 50px;" required value="{{ old('nama') }}">
                                            @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 p-2">
                                            <label for="username" class="col-form-label fw-bold">Username</label>
                                            <input type="text" name="username" class="form-control shadow rounded-4 mt-1  @error('username') is-invalid @enderror" id="username" placeholder="Masukkan Username Anda" style="height: 50px;" required value="{{ old('username') }}">
                                            @error('username')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 p-2">
                                            <label for="email" class="col-form-label fw-bold">Email</label>
                                            <input type="email" name="email" class="form-control shadow rounded-4 mt-1  @error('email') is-invalid @enderror" id="email" placeholder="name@mail.com" style="height: 50px;" required value="{{ old('email') }}">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 p-2">
                                            <label for="password" class="col-form-label fw-bold">Password</label>
                                            <input type="password" name="password" class="form-control shadow rounded-4 mt-1  @error('password') is-invalid @enderror" id="password" placeholder="Masukkan Password Anda" style="height: 50px;" required>
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 p-2">
                                            <label for="phone" class="col-form-label fw-bold">Nomor Telepon</label>
                                            <input type="number" name="phone" class="form-control shadow rounded-4 mt-1  @error('phone') is-invalid @enderror" id="phone" placeholder="Masukkan Nomor Anda (08xxxxxxxxxx)" style="height: 50px;" required value="{{ old('phone') }}">
                                            @error('phone')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 p-2">
                                            <label for="born" class="col-form-label fw-bold">Tempat/Tanggal Lahir</label>
                                            <input type="text" name="born" class="form-control shadow rounded-4 mt-1  @error('born') is-invalid @enderror" id="born" placeholder="Masukkan Tempat, Tanggal Lahir" style="height: 50px;" required value="{{ old('born') }}">
                                            @error('born')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 p-2">
                                            <label for="address" class="col-form-label fw-bold">Alamat</label>
                                            <input type="text" name="address" class="form-control shadow rounded-4 mt-1  @error('address') is-invalid @enderror" id="address" placeholder="Masukkan Alamat" style="height: 50px;" required value="{{ old('address') }}">
                                            @error('alamat')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 p-2">
                                            <label for="religion" class="col-form-label fw-bold">Agama</label>
                                            <input type="text" name="religion" class="form-control shadow rounded-4 mt-1  @error('religion') is-invalid @enderror" id="religion" placeholder="(Islam, Kristen, Katolik, Budha, Hindu, Khonghucu)" style="height: 50px;" required value="{{ old('religion') }}">
                                            @error('religion')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 p-2">
                                            <label for="job" class="col-form-label fw-bold">Pekerjaan</label>
                                            <input type="text" name="job" class="form-control shadow rounded-4 mt-1  @error('job') is-invalid @enderror" id="job" placeholder="Masukkan Pekerjaan" style="height: 50px;" required value="{{ old('job') }}">
                                            @error('job')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 p-2">
                                            <label for="gender" class="col-form-label fw-bold">Jenis Kelamin</label>
                                            <div class="d-flex justify-content-start mt-3">
                                                <div class="form-check">
                                                    <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="male" value="L" {{ old('gender') == 'L' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="male">Laki-Laki</label>
                                                </div>
                                                <div class="form-check mx-4">
                                                    <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="female" value="P" {{ old('gender') == 'P' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="female">Perempuan</label>
                                                </div>
                                                @error('gender')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 p-2">
                                            <label for="status" class="col-form-label fw-bold">Status Perkawinan</label>
                                            <div class="d-flex justify-content-start mt-3">
                                                <div class="form-check">
                                                    <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status" id="married" value="1" {{ old('status') == '1' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="married">Kawin</label>
                                                </div>
                                                <div class="form-check mx-4">
                                                    <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status" id="single" value="0" {{ old('status') == '0' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="single">Belum Kawin</label>
                                                </div>
                                            </div>
                                            @error('status')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="d-flex justify-content-center p-1 mt-5">
                                            <button type="submit" class="btn btn-lg btn-primary text-center" style="background-color: #37517E; border:0; border-radius:20px"><span class="p-4" style="font-size: 16px">Sign Up</span></button>
                                        </div>
                                    </form>
                                    {{-- <form action="" class="mb-3 mt-md-4">
                                        <div class="section-title">
                                            <h2 class="">Create Account</h2>
                                        </div>
                                        <div class="p-3 mx-2">
                                            <div class="row">
                                                <div class="col-md-6 p-4">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <label for="" class="col-form-label fw-bold">Nama Lengkap</label>
                                                        </div>
                                                        <div class="col-9">
                                                            <input type="text" class="form-control shadow rounded-4" id="" placeholder="Masukkan Nama Lengkap" style="height: 130%;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 p-4">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <label for="" class="col-form-label fw-bold">Agama</label>
                                                        </div>
                                                        <div class="col-9">
                                                            <input type="text" class="form-control shadow rounded-4" id="" placeholder="Masukkan Agama" style="height: 130%;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 p-4">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <label for="" class="col-form-label fw-bold">Tempat/Tanggal Lahir</label>
                                                        </div>
                                                        <div class="col-9">
                                                            <input type="text" class="form-control shadow rounded-4" id="" placeholder="Masukkan Tempat dan Tanggal Lahir" style="height: 90%;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 p-4">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <p class="fw-bold fs-6">Status Perkawinan</p>
                                                        </div>
                                                        <div class="col-9">
                                                            <div class="d-flex justify-content-start">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                    <label class="form-check-label" for="flexRadioDefault1">Kawin</label>
                                                                </div>
                                                                <div class="form-check mx-4">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                                    <label class="form-check-label" for="flexRadioDefault2">Belum Kawin</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 p-4">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <p class="fw-bold fs-6">Jenis Kelamin</p>
                                                        </div>
                                                        <div class="col-9">
                                                            <div class="d-flex justify-content-start">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefaultNew" id="flexRadioDefault3">
                                                                    <label class="form-check-label" for="flexRadioDefault3">Laki-Laki</label>
                                                                </div>
                                                                <div class="form-check mx-4">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                                                                    <label class="form-check-label" for="flexRadioDefault4">Perempuan</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 p-4">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <label for="" class="col-form-label fw-bold">Pekerjaan</label>
                                                        </div>
                                                        <div class="col-9">
                                                            <input type="text" class="form-control shadow rounded-4" id="" placeholder="Masukkan Pekerjaan" style="height: 130%;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 p-4">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <label for="" class="col-form-label fw-bold">Alamat</label>
                                                        </div>
                                                        <div class="col-9">
                                                            <input type="text" class="form-control shadow rounded-4" id="" placeholder="Masukkan Alamat" style="height: 130%;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 p-4">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <label for="" class="col-form-label fw-bold">Nomor Telepon</label>
                                                        </div>
                                                        <div class="col-9">
                                                            <input type="text" class="form-control shadow rounded-4" id="" placeholder="Masukkan Nomor Telepon" style="height: 130%;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center p-1 mt-5">
                                                <button type="button" class="btn btn-lg btn-primary text-center" style="background-color: #37517E; border:0; border-radius:20px"><span class="p-4" style="font-size: 16px">Sign Up</span></button>
                                            </div>
                                        </div>
                                    </form> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
