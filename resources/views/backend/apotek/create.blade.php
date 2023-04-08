
<x-app-layout>
    @push('css')
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
    @endpush
    @push('js')
        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <script>
            $(function() {
                $('input[name="jam_kerja"]').daterangepicker({
                    timePicker: true,
                    startDate: moment().startOf('hour'),
                    endDate: moment().startOf('hour').add(32, 'hour'),
                    locale: {
                        format: 'LT'
                    }
                });
            });

        </script>
        <script>
             $(document).ready(function() {
                $('#gambar_konten').change(function () {
                    const file = this.files[0];
                    if (file) {
                        let reader = new FileReader();
                        reader.onload = function (event) {
                            $('#photosPreview')
                            .attr("src",event.target.result);
                        };
                        reader.readAsDataURL(file);
                    }
                })
            })
        </script>
        <script>
            $("#datepicker").daterangepicker( {
                singleDatePicker: true,
                showDropdowns: true,
                locale: {
                        format: 'YYYY-MM-DD'
                    }
           });
       </script>
    @endpush
    @section('content')
    <section class="content-main">
        <div class="content-header">
            <h2 class="content-title">Data {{ ucwords(str_replace('-',' ',Request::segment(3))) }}</h2>
            <div>
                <button onclick="history.back()" class="btn btn-light"><i class="text-muted material-icons md-arrow_back"></i>Kembali</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                    <header class="card-header">
                        <h4>Profile Data Apotek</h4>
                    </header>
                    <div class="card-body">
                        <form action="{{ route('apotek.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Nama Petugas</label>
                                    <input type="text" value="{{ old('nama_apotek') }}" placeholder="Masukkan nama petugas" class="form-control @error('nama_apotek') is-invalid @enderror" name="nama_apotek"/>
                                    @error('nama_apotek')
                                        <div class="invalid-feedback">
                                            {{$message}}.
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Email</label>
                                    <input type="text" value="{{ old('email') }}" placeholder="Masukkan email petugas" class="form-control @error('email') is-invalid @enderror" name="email"/>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{$message}}.
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Jabatan</label>
                                    <input type="text" value="{{ old('jabatan') }}" placeholder="Masukkan jabatan" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan"/>
                                    @error('jabatan')
                                        <div class="invalid-feedback">
                                            {{$message}}.
                                        </div>
                                    @enderror
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label for="product_name" class="form-label">Jenis Kelamin</label>
                                        <label class="mb-2 form-check form-check-inline" style="width: 45%;">
                                            <input class="form-check-input" id="jenis_kelamin" name="jeni_kelamin" value="1" {{ old('jenis_kelamin') == '1' ? "checked" : '' }} type="radio">
                                            <span class="form-check-label"> Laki-Laki </span>
                                        </label>
                                        <label class="mb-2 form-check form-check-inline" style="width: 45%;">
                                            <input class="form-check-input" id="jeni_kelamin" name="jeni_kelamin" value="2" {{ old('jenis_kelamin') == '1' ? "checked" : '' }} type="radio">
                                            <span class="form-check-label"> Perempuan </span>
                                        </label>
                                        @error('jenis_kelamin')
                                            <div class="invalid-feedback">
                                                {{$message}}.
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Alamat</label>
                                    <textarea name="alamat" id="" cols="30" rows="10" class="form-control" placeholder="Masukkan alamat"></textarea>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{$message}}.
                                        </div>
                                    @enderror
                                </div>

                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <header class="card-header">
                        <h4>Akun Data Apotek</h4>
                    </header>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="product_name" class="form-label">Username</label>
                            <input type="text" value="{{ old('username') }}" placeholder="Masukkan username" class="form-control @error('username') is-invalid @enderror" name="username"/>
                            @error('username')
                                <div class="invalid-feedback">
                                    {{$message}}.
                                </div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="product_name" class="form-label">Password</label>
                            <input type="text" value="{{ old('password') }}" placeholder="Masukkan password" class="form-control @error('password') is-invalid @enderror" name="password"/>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{$message}}.
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card">
                    <header class="card-header">
                        <h4>Foto Data Apotek</h4>
                    </header>
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="input-upload">
                                <img src="{{ asset('') }}backend/assets/imgs/theme/upload.svg" alt="" id="photosPreview"/>
                                <input class="form-control" name="foto_apotek" type="file" id="gambar_konten"/>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="d-flex justify-content-end mb-4">
            <button type="reset" class="btn btn-outline-danger">Batal</button>
            <button type="submit" class="btn btn-primary mx-2">Simpan</button>

        </div>
    </form>

        <!-- card end// -->
    </section>
    @endsection
</x-app-layout>
