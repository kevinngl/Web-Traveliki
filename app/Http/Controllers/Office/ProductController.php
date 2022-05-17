<?php

namespace App\Http\Controllers\Office;
use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\AdminCredential;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $product = Http::get("http://192.168.137.1:8081/api/product");
            return view("page.office.product.main", [
                "product" => json_decode($product)
            ]);
        }
        catch(ConnectionException $exception){
            return view("page.office.product.main", [
                "product" => null
            ]);
        }
        // return $product;
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("page.office.product.input");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama = $request->nama;
        $harga = (int)$request->harga;
        $destinasi = $request->destinasi;
        $jenis_tiket = $request->jenis_tiket;
        $gambarfile = fopen($request->file('gambar'), 'r');
        $id_admin = AdminCredential::admin()->id;
        $product = Http::withHeaders([
            'Authorization' => AdminCredential::admin()->token,
        ])->attach('gambarfile', $gambarfile, null)->post('http://192.168.137.1:8081/api/product', [
            'nama' => $nama,
            'harga' => $harga,
            'destinasi' => $destinasi,
            'jenis_tiket' => $jenis_tiket,
            'id_admin' => $id_admin
        ]);

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Http::withHeaders([
            'Authorization' => AdminCredential::admin()->token
        ])->get('http://192.168.137.1:8081/api/product/'.$id);
        
        return view("page.office.product.edit", [
            "product" => json_decode($product)
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $harga = (int)$request->harga;
        $destinasi = $request->destinasi;
        $jenis_tiket = $request->jenis_tiket;
        $product = Http::withHeaders([
            'Authorization' => AdminCredential::admin()->token,
        ])->put('http://192.168.137.1:8081/api/product/'.$id, [
            'harga' => $harga,
            'destinasi' => $destinasi,
            'jenis_tiket' => $jenis_tiket,
        ]);

        return redirect()->route("product.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Http::withHeaders([
            'Authorization' => AdminCredential::admin()->token
        ])->delete("http://192.168.137.1:8081/api/product/".$id);

        // return $product->json('data');
        return redirect()->route("product.index");
    }
}
