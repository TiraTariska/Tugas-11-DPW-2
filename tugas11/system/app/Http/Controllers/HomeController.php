<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class HomeController extends Controller{


    function showBeranda(){
        return view('beranda');
    }
    function showProduk(){
        return view('produk');
    }
    function showKategori(){
        return view('kategori');
    }
    function test($produk, $hargaMin = 0 , $hargaMax = 0 ){
        if($produk == 'baju'){
            echo "Tampilkan Produk Baju";
        }elseif($produk == 'sepatu'){
            echo "Produk Sepatu";
        }
        echo "<br>";
        echo "Harga Min adalah $hargaMin  <br>";
        echo "Harga Max adalah $hargaMax  <br>";
    }

    public function testCollection()
    {
        $list_baju = ['Gucci', 'Balenciaga', 'Versace', 'Vetements', 'Vearst', 'Fendi', 'Vlone'];      
        $list_baju = collect($list_baju);
        $list_produk = Produk::all();
    
        // Sorting
        // Sort By Harga Terendah
        //dd($list_produk->sortBy('harga'));
        // Sort By Harga Tertinggi
        //dd($list_produk->sortByDesc('harga'));
        //$data['list'] = $list_produk;
        //return view('test-collection', $data);

        // Take
        // Skip

        // Filter

        //$filtered = $list_produk->filter(function($item){
           // return $item->harga > 200000;
        //});
        
        //dd($filtered);

        //$sum = $list_produk->max('harga');
         //$sum = $list_produk->sum('harga');
          //$sum = $list_produk->average('harga');
        //dd($sum);

        $data['list'] = Produk::paginate(10);
        return view('test-collection', $data);

        dd($list_baju, $list_produk);
       
    }
}