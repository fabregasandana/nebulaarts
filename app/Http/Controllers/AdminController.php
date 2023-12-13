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
}
