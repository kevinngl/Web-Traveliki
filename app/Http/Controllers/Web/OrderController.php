<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Tiket;
use App\Models\UserCredential;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;

class OrderController extends Controller
{
    public function index(){
        try{
            $order = Http::withHeaders([
                'Authorization' => UserCredential::user()->token
            ])->get('http://192.168.100.8:8082/api/order');
    
            return view("page.web.order.main", [
                "order" => json_decode($order)
            ]);
        }
        catch(ConnectionException $exception){
            return view("page.web.order.main", [
                "order" => null
            ]);
        }
        
    }

    public function comeorder(){
        try{
            $order = Http::withHeaders([
                'Authorization' => UserCredential::user()->token
            ])->get('http://192.168.100.8:8082/api/order');
    
            return view("page.order.comeorder", [
                "order" => json_decode($order)
            ]);
        }
        catch(ConnectionException $exception){
            return view("page.order.comeorder", [
                "order" => null
            ]);
        }
        
    }

    public function store(Request $request){
        try{
            $id_tiket = (int) $request->id_tiket;
            $id_admin = (int) $request->id_admin;
            $jenis_tiket = $request->jenis_tiket;
            $destinasi =  $request->destinasi;
            $id_user = UserCredential::user()->id;
            $order = Http::withHeaders([
                'Authorization' => UserCredential::user()->token
            ])->post('http://192.168.137.1:8082/api/order', [
                'id_tiket' => $id_tiket,
                'id_admin' => $id_admin,
                'total_harga' => $total_harga,
                'id_user' => $id_user
            ]);

            $tiket = Http::get("http://192.168.137.1:8081/api/tiket/".$id_tiket);
            $tiket_decoded = json_decode($tiket);
            $tiket = Http::withHeaders([
                'Authorization' => UserCredential::user()->token,
            ])->put('http://192.168.137.1:8081/api/tiket/'.$id_tiket, [
                'total_harga' => $tiket_decoded->total_harga,
                'destinasi' => $tiket_decoded->destinasi,
                'jenis_tiket' => $tiket_decoded->jenis_tiket,
            ]);

            return redirect()->route('myorder');
        }
        catch(ConnectionException $exception){
            return redirect()->route('myorder');
        }
        
    }

    public function update(Request $request, $id){
        $status = $request->status;
        $order = Http::withHeaders([
            'Authorization' => UserCredential::user()->token
        ])->put('http://192.168.100.8:8082/api/order/'.$id, [
            'status' => $status
        ]);

        return redirect()->route('comeorder');
    }

    public function destroy($id){
        $order = Http::withHeaders([
            'Authorization' => UserCredential::user()->token
        ])->delete('http://192.168.100.8:8082/api/order/cancel/'.$id);

        return redirect()->route('myorder');
    }
}
