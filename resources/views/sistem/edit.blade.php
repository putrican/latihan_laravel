<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container bg-white">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Edit Karyawan</h2>
                <hr>
                <form action="{{ route('sistem.update', $sistem->id) }}" method="POST">
                    @method('PUT')
                    @csrf

                    <div class="form-group">
                        <label for="nis">Nis</label>
                        <input type="text" name="nis" id="nis" class="form-control @error('nis') is-invalid @enderror" value="{{ old('nis') ?? $sistem->nis }}">
                        @error('nis')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') ?? $sistem->nama }}">
                        @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" rows="3" class="form-control @error('alamat') is-invalid @enderror" {{ old('alamat') ?? $sistem->alamat }}></textarea>
                       
                        @error('alamat')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" name="kelas" id="kelas" class="form-control @error('kelas') is-invalid @enderror" value="{{ old('kelas') ?? $sistem->kelas }}">
                        @error('kelas')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" name="jurusan" id="jurusan" class="form-control @error('jurusan') is-invalid @enderror" value="{{ old('jurusan') ?? $sistem->jurusan }}">
                        @error('jurusan')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nama_orang_tua">Nama orang tua</label>
                        <input type="text" name="nama_orang_tua" id="nama_orang_tua" class="form-control @error('nama_orang_tua') is-invalid @enderror" value="{{ old('nama_orang_tua') ?? $sistem->nama_orang_tua }}">
                        @error('nama_orang_tua')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="minat">Minat</label>
                        <textarea name="minat" id="minat" rows="3" class="form-control @error('minat') is-invalid @enderror" {{ old('minat') ?? $sistem->minat }}></textarea>
                        @error('minat')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Simpan</button>                  
                </form>               
            </div>
        </div>
    </div>
</body>
</html>