<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\UserCredential;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;

class HomeController extends Controller
{
    public function index()
    {
        try{
            $product = Http::get("http://192.168.137.1:8081/api/product");
            return view("page.web.home.main", [
                "product" => json_decode($product)
            ]);
        }
        catch(ConnectionException $exception){
            return view("page.web.home.main", [
                "product" => null
            ]);
        }
        // return $product;
    }
    public function detail($id){
        try{
            $product = Http::get("http://192.168.137.1:8081/api/product/".$id);

            // return $product->json('data');
            return view("page.web.home.detail", [
                "product" => json_decode($product)
            ]);
        }
        catch(ConnectionException $exception){
            return redirect()->route('/');
        }
    }
    public function detail_order($id){
        try{
            $product = Http::get("http://192.168.137.1:8081/api/product/".$id);

            // return $product->json('data');
            return view("page.web.order.main", [
                "product" => json_decode($product)
            ]);
        }
        catch(ConnectionException $exception){
            return redirect()->route('/');
        }
    }

}
