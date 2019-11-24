@extends('layouts.index')

@section('content')
    <h3>Transaksi Penjualan</h3>
    @if ($error)
        <div class="alert alert-danger" role="alert">
           Kode Barang <b> {{$code}} </b> Tidak Terdaftar !!
        </div>
    @else
        <p>Nama Pembeli : {{$name}}</p>
        <p>Tanggal Transaksi : {{now()}}</p>
        <p>Kode Barang : {{$product['code']}}</p>
        <p>Nama Barang : {{$product['name']}}</p>
        <p>Harga Barang : {{$product['price']}}</p>
        <p>Jumlah Beli : {{$quantity}}</p>
        <p>Total Bayar : {{$product['price'] * $quantity}}</p>
    @endif
@endsection