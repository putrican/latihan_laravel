<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT.Arista Latindo</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="navbar  fixed-top navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">PT.Arista Latido</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
          </li>                 
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Galeri</a>
          </li><li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Karyawan</a>
          </li>
        </ul>
        <form class="d-flex">           
          <button type="button" class="btn btn-warning">Contact</button>
        </form>
      </div>     
    </div>
  </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="py-3">
                    <h2 class="text-center">Sistem Pengelolaan Karyawan</h2>
                    <a href="{{ route('sistem.create') }}" class="btn btn-primary">Tambah Karyawan</a>
                    @if (session('pesan'))
                        <div class="alert alert-success">
                            {{ session('pesan')}}
                        </div> 
                    @endif
                    @if (session('edit'))
                        <div class="alert alert-success">
                            {{ session('edit')}}
                        </div> 
                    @endif
                    @if (session('destroy'))
                        <div class="alert alert-success">
                            {{ session('destroy')}}
                        </div> 
                    @endif
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nis</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Nama Orang Tua</th>
                            <th>Minat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($item as $items)
                            <tr>
                                <td>{{ $loop->iteration}} </td>
                                <td>{{ $items->nis}} </td>
                                <td>{{ $items->nama}} </td>
                                <td>{{ $items->alamat}} </td>
                                <td>{{ $items->kelas}} </td>
                                <td>{{ $items->jurusan}} </td>
                                <td>{{ $items->nama_orang_tua}} </td>
                                <td>{{ $items->minat}} </td>
                                <td>
                                    <a href="{{ route('sistem.edit', $items->id )}}" class="btn btn-info">Edit</a>
                                    <form action="{{ route('sistem.destroy', $items->id )}}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data Ini?')" class="btn btn-warning">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                        <tr>
                            <td colspan="10" class="text-center">Data Kosong</td>
                        </tr>                           
                        @endforelse                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="footer" style="background-color: black;color: white; height: 150px;">
      <div class="contaier-fluid">
        <div class="row">
          <div class="col-md-12">
            <h2>Contact us</h2>
            <p>Gang Bhakti Suci No.100, Cimpaeun, Tapos, Kota Depok, Jawa Barat, 16459</p>
          </div>
        </div>
      </div>     
    </div> 
    <footer class="blockquote-footer d-flex justify-content-center" style="background-color: black;color:white "  >
      <p title="Source Title">@ 2022 PT.Arista Latindo. All rights reserved</p>
    </footer> 

</body>
</html>