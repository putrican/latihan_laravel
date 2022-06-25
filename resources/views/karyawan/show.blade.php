<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
<body>
    <div class="container mt-3">
        <div class="row">
           <div class="pt-3 d-flex justify-content-end align-item-center">
            <h1 class="h1 mr-auto">Biodata {{$karyawans->nama}}</h1>
            <a href="{{  route('karyawans.edit', $karyawans->id)}}" class="btn btn-primary">Edit</a>
            <form action="{{ route('karyawans.destroy',$karyawans->id)}}"method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
           </div>
           <hr>
           @if (session('pesan'))
           <div class="alert alert-success" role="alert">
               {{ session('pesan')}}
           </div>
               
           @endif
           <ul>
            <li>Nik : {{ $karyawans->nik}}</li>
            <li>Nama : {{ $karyawans->nama}}</li>
            <li>Jenis kelamin : {{ $karyawans->jenis_kelamin == 'P'? 'Perempuan' : 'Laki-laki'}}</li>
            <li>Bagian : {{ $karyawans->bagian}}</li>
            <li>Alamat : {{ $karyawans->alamat == ''? '#' : $karyawans->alamat}}</li>
            <a href="{{ route('karyawans.index') }}" class="btn btn-success">Kembali</a>


           </ul>
        </div>
    </div>
</body>
</html>