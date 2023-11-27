<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\manajemenProduct;
use App\Models\ShowProduct;

class KatalogController extends Controller
{
    public function index()
    {
        $data = manajemenProduct::all();
        return view('Admin\partials\layouts\katalog', compact('data'));
    }

    public function add_katalog(Request $request)
    {
        $katalog = new ShowProduct;
        $katalog->title = $request->title;
        $katalog->description = $request->description;
        $katalog->quantity = $request->quantity;
        $katalog->price = $request->price;
        $katalog->discount_price = $request->dis_price;

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('katalog', $imagename);

        $katalog->image = $imagename;


        $katalog->save();



        return redirect()->back()->with('message', 'Produk berhasil ditambah');;
    }
}
