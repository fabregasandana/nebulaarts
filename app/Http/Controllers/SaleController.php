<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    public function index(){
        $produk = Sale::all();
        return view('user.index', compact('produk'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function sale(){
        return view('admin.create');
    }

    public function db(Request $request){
        $produk = new Sale;
        $produk->nama = $request->input('nama');
        $produk->gambar = $request->input('gambar');
        $produk->harga = $request->input('harga');
        $produk->stok = $request->input('stok');
        $produk->save();

        return redirect('/admin')->with('Data berhasil ditambah');
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

    public function cart(){
        $produk = Sale::all();
        return view('user.produk', compact('produk'));
    }

    public function addToCart($id)
    {
        $produk = Sale::findOrFail($id);
  
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['stok']++;
        }  else {
            $cart[$id] = [
                "nama" => $produk->nama,
                "gambar" => $produk->gambar,
                "harga" => $produk->harga,
                "stok" => 1
            ];
        }
  
        session()->put('cart', $cart);
        return redirect()->back()->with('Berhasil', 'Produk berhasil ditambah');
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('Berhasil', 'Pesanan berhasil dihapus');
        }
    }
}
