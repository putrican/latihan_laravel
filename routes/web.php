<?php

use Illuminate\Support\Facades\Route;
use App\http\Controlles\KaryawanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/karyawans','KaryawanController@index')->name('karyawans.index');
// Route::get('/karyawans/create','KaryawanController@create')->name('karyawans.create');
// Route::post('/karyawans','KaryawanController@store')->name('karyawans.store');
// Route::get('/karyawans/{id}','KaryawanController@show')->name('karyawans.show');
// Route::get('/karyawans/{karyawan}/edit','KaryawanController@edit')->name('karyawans.edit');
// Route::patch('/karyawans/{karyawan}','KaryawanController@update')->name('karyawans.update');
// Route::delete('/karyawans/{karyawan}','KaryawanController@destroy')->name('karyawans.destroy');

// Route::resource('/karyawans','KaryawanController');
Route::resource('gallery','GalleryController');
Route::resource('/karyawan','KaryawanController');
Route::resource('/sistem', 'SistemController');



// Route::get('/file-upload','FileUploadController@FileUpload');
// Route::post('/file-upload','FileUploadController@prosesFileUpload');


// Route::get('/file-upload-rename', 'FileUploadController@FileUploadRename');
// Route::post('/file-upload-rename', 'FileUploadController@prosesFileUploadRename');










// Route::get('/cek-data','KaryawanController@cekdata');
// Route::get('/insert','KaryawanController@insert');
// Route::get('/content','KaryawanController@content');
// Route::get('/content1','KaryawanController@content1');
// Route::get('/update','KaryawanController@update');
// Route::get('/updatewhere','KaryawanController@updatewhere');
// Route::get('/karUpdate','KaryawanController@karUpdate');
// Route::get('/delete','KaryawanController@delete');
// Route::get('/destroy','KaryawanController@destroy');
// Route::get('/kar-delete','KaryawanController@karDelete');
// Route::get('/all','KaryawanController@all');
// Route::get('/allview','KaryawanController@allview');


// use App\Http\Controllers\PageController;
// Route::get('/',[PageController::class, 'index']);
// Route::get('/','PageController@index');
// Route::get('/facade', 'PageController@LatihanFacade');


// Route::get('/karyawan','KaryawanController@karyawan')->name('karyawan');
// Route::get('/hrd','KaryawanController@hrd')->name('hrd');
// Route::get('/galery','KaryawanController@galery')->name('galery');


// Route::get('test', 'CollectionController@test');
// Route::get('test1', 'CollectionController@test1');
// Route::get('test2', 'CollectionController@test2');
// Route::get('test3', 'CollectionController@test3');
// Route::get('test4', 'CollectionController@test4');
// Route::get('test5', 'CollectionController@test5');




// Route::get('/karyawan', function(){
//     $karyawan = ["Hana","Maria","Candra"];
//     return view('karyawan.tampil')->with('karyawan',$karyawan);
// });
// Route::get('/hrd', function(){
//     $hrd = ["Imam","vana"];
//     return view('karyawan.hrd')->with('hrd',$hrd);
// });
// Route::get('/galery', function(){
//     return view('karyawan.galery');
// });


// Route::get('/admin', function(){
//     return view('admin');
// });



// Route::get('/karyawan', function(){
//     $karyawan = '<i>Putri johanna<i/>';
//     $gaji = '5000000';
//     return view('karyawan.index',compact('karyawan','gaji'));
// });




// Route::get('/karyawan',function(){
//     $data = ["elfrida","fajar","gea","hani"];

//     return view('karyawan.index',compact('data'));
// });



// Route::get('/karyawan',function(){
//     return view('karyawan.index',[
//         "karyawann01" => "Elfrida",
//         "karyawann02" => "Fajar",
//         "karyawann03" => "Gea",
//         "karyawann04" => "Hani"
//     ]
// );
// });


// Route::get('/', function () {
//     return view('Welcome') ;
// });

// Route::get('/home', function(){
//     return 'Selamat datang di halaman SAYA';
// });

// Route::get('profile', function(){
//     echo '<h1 style="text-align: center;"><i>Halaman Profile</i></h1>';
// });

// //route parameter
// Route:: get('/karyawan/{kelas}', function($kelas){
//     echo "Tampilkan data karyawan berkelas $kelas";
// });


// //route optional parameter
// Route::get('/stock/{jenis?}/{merek?}', function($a = 'Oppo', $b = 'Vivo'){
//     return "Cek sisa stock untuk $a $b";
// });

// //route parameter reguler 
// Route:: get('/user/{id}', function($id){
//     return " Tampilkan user dengan id = $id";

// });

// //route redirect
// Route:: get('/call-me', function(){
//     return '<p>Hubungi saya sekarang</p>';
// });
// Route:: redirect('contact-us','/call-me');


// //Route group
// Route::prefix('/mahasiswa')->group(function(){
//     Route::get('/', function(){
//         echo "Halaman Mahasiswa";
//     });
//     Route::get('/ti', function(){
//         echo "<h1>Kelas Teknik Informatika</h1>";
//     });
//     Route::get('/mi', function(){
//         echo "<h1>Kelas Manajemen  Informatika</h1>";
//     });
//     Route::get('/si', function(){
//         echo "<h1>Kelas sistem informasi</h1>";
//     });
// });




// Route::get('/profile', function(){
//     $data = ['halo', 2 => ["selamat datang","selamat jalan"]];
//     // dd($data);
//     dump($data);
//     return $data;
// });