<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \stdClass;

class CollectionController extends Controller
{
    public function test(){
        $collection = collect([2,4,6,8,10]);
        dd($collection);
    }

    public function test1(){
        //colection dari berbagai data
        $collection = collect([2,4,6,8,10]);
        echo $collection[0]; echo "<br>";
        echo $collection[3]; echo "<br>";
        foreach($collection as $value){
            echo $value;
        }
    }

    public function test2(){
        $collection = collect([1,5,8,9,9]);
        // dump($collection->sum());
        // dump($collection->avg());
        // dump($collection->max());
        // dump($collection->min());
        // dump($collection->median());
        

        // dump($collection->random());
        
        // echo($collection->concat([10,11,12]));

        // dump($collection->contains(0));
        // dump($collection->contains(3));

        // echo $collection->unique();

        // dump($collection->all());
        
        //contoh array
        // $varA = [1,2,3];
        // dump($varA);
        //collection
        // $varB = collect([1,2,3]);
        // dump($varB);


        // dump($collection->first());
        // dump($collection->last());

        // dump($collection->count());
        // dump($collection->sort());
    }
    public function test3(){
        $collection = collect([
            "nama"=>"Putri",
            "jurusan"=>"MI",
            "kota"=>"Depok",
        ]);
        // $collection->each(function($val, $key){
        //     echo "$key: $val <br>";
        // });

        foreach($collection as $key => $val){
            echo "$key = $val <br>";

        }

        // dump($collection->search("MI"));


        //ambil semua key
        // dump($collection->keys());
        // //ambil semua value
        // dump($collection->values());

        // dump($collection->flip());
        // dump ($collection->forget('kota'));
        // $hasil = $collection->replace([
        //     'jurusan' => 'TI',
        //     'nama' => 'sarah',
        // ]);
        // dump($hasil);

        // dump($collection->get('jurusan'));
        // dump($collection->has('jurusan'));
        // dump($collection->has('kota'));
    }

    public function test4(){
        $collection = collect([
            ['namaBarang' => 'LaptopA','harga' => 2],
            ['namaBarang' => 'LaptopB','harga' => 13],
            ['namaBarang' => 'LaptopC','harga' => 50],
        ]);

        dump($collection->pluck("namaBarang"));
        // $hasil = $collection->where('harga',13)->first();
        // echo $hasil['namaBarang']."<br>";

        // $hasil = $collection->firstwhere('harga', 50);
        // echo $hasil["namaBarang"];
        



        //CARI ELEMEN YG KEY HARGA BERNILAI 13
        // dump($collection-> where('harga',13));
        //TAMPILKAN NAMA BARANG YG ELEMENT KEY HARGA LEBIH DARI 20
        // dump($collection->where('harga',">=",20));

        // $hasil = $collection->filter(function($val,$key){
        //     return $val['harga'] > 5 ;
        // });
        // dump($hasil);


        //URUTKAN BERDASARKAN KEY HARGA
        // dump($collection->sortBy("harga"));

        //URUTKAN BERDASARKAN KEY HARGA DAN TAMPILKAN SEBAGAI ARRAY
        // dump($collection->sortBy("harga")->all());

        //URUTKAN BERDASARKAN KEY HARGA
        // dump($collection->sortByDesc("harga"));

        //URUTKANBERDSARKAN KEY HARGA DAN TAMPILKAN MENGGUNAKAN METHOD EACH()
        // $collection->sortBy('harga')->each(function($val,$key){
        //     echo $val['namaBarang'],"<br>";
        // });
    }

    public function test5(){
        $karyawan = new \stdClass();
        $karyawan->nama = "Putri";
        $karyawan->kota = "Depok";
        $karyawan->posisi = "Staff";
        $karyawan2 = new \stdClass();
        $karyawan2->nama = "Anugarah";
        $karyawan2->kota = "Depok";
        $karyawan2->posisi = "Marketing";
        $karyawan3 = new \stdClass();
        $karyawan3->nama = "Eka";
        $karyawan3->kota = "Depok";
        $karyawan3->posisi = "Hrd";

        $karyawans = collect([
            0 => $karyawan,
            1 => $karyawan2,
            2 => $karyawan3,

        ]);
        // $hasil = $karyawans->groupBy("posisi");
        // dump($hasil);
        dump($karyawans);
        
        //CARA MENGAKSES NILAI COLLECTION
        foreach($karyawans as $karyawan){
            echo $karyawan->nama;
            echo "<br>";
        }
    }



}
