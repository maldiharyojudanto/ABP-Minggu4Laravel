<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index() {
        $list = Produk::all();
        return view("produk.index",compact('list'));
    }

    public function create() {
        return view("produk.create");
    }

    public function store(Request $req) {
        $produk = new Produk();
        $produk->nama_produk = $req->nama_produk;
        $produk->stok = $req->stok;
        $produk->save();
        return redirect("/produk");
    }

    public function edit($id) {
        //$detail = Produk::where("id",$id)->get();
        $detail = Produk::find($id); // find dapat dipakai jika primary key
        return view("produk.edit",compact('detail'));
    }

    public function update($id, Request $req) {

        $cek = Produk::find($id);
        
        if($cek) {

            $cek->nama_produk = $req->nama_produk;
            $cek->stok        = $req->stok;
            $cek->save();

            return redirect("/produk");

        } else {
            
            echo "Data tidak ditemukan";

        }
    }

    public function delete($id) {

        $cek = Produk::find($id);

        if($cek) {

            $cek->delete();
            return redirect("/produk");

        } else {

            echo "Data tidak ditemukan";
        
        }
    }
}