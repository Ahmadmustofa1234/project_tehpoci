<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\manajemenProduct;


class ManajemenController extends Controller
{
    public function index()
    {
        return view('Admin\partials\layouts\manajemen');
    }

    public function viewProduct()
    {
        return view('\Admin\partials\layouts\addProduk');
    }

    public function addProduct(Request $request)
    {

        $request->validate([
            'namaProduk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        $data = new manajemenProduct;

        $data->nama_produk = $request->namaProduk;
        $data->harga = $request->harga;
        $data->stok = $request->stok;

        $data->save();

        return redirect('/addProduk')->with('success', 'Product added successfully');
    }
}
