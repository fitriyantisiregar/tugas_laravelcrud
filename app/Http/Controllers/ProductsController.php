<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class product extends Controller
{
    public function FormProduct()
    {
        return view("formproduct");
    }
    public function form(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'gambar' => 'required',
            'name' => 'required',
            'berat' => 'required',
            'harga' => 'required',
            'stock' => 'required',
            'kondisi' => 'required',
            'deskripsi' => 'required',
        ], [
            'gambar' => 'Error:  gambar wajib di isi!',
            'name.required' => 'Error:  nama wajib di isi!',
            'berat.required' => 'Error:  berat wajib di isi!',
            'harga.required' => 'Error:  harga wajib di isi!',
            'stock.required' => 'Error:  stock wajib di isi!',
            'kondisi.required' => 'Error:  kondisi wajib di isi!',
            'deskripsi.required' => 'Error:  deskripsi wajib di isi!',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $product = new Produk();
        $product->gambar = $request->gambar;
        $product->nama = $request->name;
        $product->berat = $request->berat;
        $product->harga = $request->harga;
        $product->stock = $request->stock;
        $product->kondisi = $request->kondisi;
        $product->deskripsi = $request->deskripsi;
        $product->save();

        return redirect()->route('product.create');
    }
    public function ProductsBarang()
    {
        $products = Produk::all();
        return view('product', compact('products'));
    }
    public function admin()
    {
        $products = Produk::all();
        return view("admins", compact('products'));
    }
    public function formEdit($id)
    {
        $product = Produk::findOrFail($id);
        return view('formproduct', compact('product'));
    }
    public function formDelete($id)
    {
        $product = Produk::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.create');
    }
    public function formUpdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'gambar' => 'required',
            'name' => 'required',
            'berat' => 'required',
            'harga' => 'required',
            'stock' => 'required',
            'kondisi' => 'required',
            'deskripsi' => 'required',
        ], [
            'gambar.required' => 'Error: Field gambar wajib di isi!',
            'name.required' => 'Error: Field nama wajib di isi!',
            'berat.required' => 'Error: Field berat wajib di isi!',
            'harga.required' => 'Error: Field harga wajib di isi!',
            'stock.required' => 'Error: Field stock wajib di isi!',
            'kondisi.required' => 'Error: Field kondisi wajib di isi!',
            'deskripsi.required' => 'Error: Field deskripsi wajib di isi!',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $product = Produk::findOrFail($id);
        $product->gambar = $request->gambar;
        $product->nama = $request->name;
        $product->berat = $request->berat;
        $product->harga = $request->harga;
        $product->stock = $request->stock;
        $product->kondisi = $request->kondisi;
        $product->deskripsi = $request->deskripsi;
        $product->save();

        return redirect()->route('admin.create');

    }
}
