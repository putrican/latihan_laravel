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
    <div class="container mt-3">
        <h2>File Upload</h2>
        <hr>
        <form action="{{ url('file-upload-rename')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="from-group">
                <label for="nama_gambar">Nama Gambar</label><br>
                <input type="text" name="nama_gambar" id="v" class="form-control-file">
            </div>
            <div class="from-group">
                <label for="gambar_profile">Gambar Profile</label><br>
                <input type="file" name="gambar_profile" id="gambar_profile" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
    
</body>
</html>