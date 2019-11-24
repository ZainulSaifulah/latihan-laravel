<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    private $items = [
        'B001' => [
            'code' => 'B001',
            'name' => 'Buku',
            'price' => 2000,
            'quantity' => 100
        ],
        'B002' => [
            'code' => 'B002',
            'name' => 'Pulpen',
            'price' => 1500,
            'quantity' => 100
        ],
        'B003' => [
            'code' => 'B003',
            'name' => 'Pensil',
            'price' => 1000,
            'quantity' => 100
        ],
        'B004' => [
            'code' => 'B004',
            'name' => 'Penghapus',
            'price' => 500,
            'quantity' => 100
        ],
        'B005' => [
            'code' => 'B005',
            'name' => 'Penggaris',
            'price' => 1300,
            'quantity' => 100
        ]
    ];

    public function index(){
        return view('barang.index', [
            'items' => $this->items
        ]);
    }


    public function add(){
        return view('barang.add');
    }

    public function addProcess(Request $request){
        foreach($this->items as $item){
            if($item['code'] == $request->code){
                $product = $item;
                $error = false;
                break;
            }else{
                $product = [];
                $error = true;
            }
        }

        return view('barang.show', [
            'error' => $error,
            'product' => $product,
            'name' => $request->name,
            'code' => $request->code,
            'quantity' => $request->quantity
        ]);
    }
}
