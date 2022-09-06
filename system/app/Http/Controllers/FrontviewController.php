<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;

class FrontviewController extends Controller
{
    
    public function index()
    {
        $data['list_produk'] = Produk::all();
        return view('frontview.index', $data);
    }

    public function account()
    {
        return view('frontview.account');
    }


    public function produk()
    {
        $data['list_produk'] = Produk::all();
        return view('frontview.produk', $data);
    }

    public function produkdetail()
    {
        return view('frontview.produkdetail');
    }

   
}
