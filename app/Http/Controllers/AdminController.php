<?php

namespace App\Http\Controllers;
use App\Models\Sale;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $produk = Sale::all();
        return view('admin.index', compact('produk'));
    }

    public function new($id){
        $produk = Sale::find($id);
        return view('admin.edit', compact (['produk']));
    }

    public function update(Request $request, $id){
        $produk = Sale::find($id);
        $produk -> nama = $request->input('nama');
        $produk -> gambar = $request->input('gambar');
        $produk -> harga = $request->input('harga');
        $produk -> stok = $request->input('stok');
        $produk->save();
        return redirect('/admin')->with('sukses', 'data berhasil diubah');
    }

    public function delete($id){
        $produk = Sale::find($id);
        $produk ->delete();
        return redirect('/admin')->with('sukses', 'data berhasil dihapus');
    }
}
