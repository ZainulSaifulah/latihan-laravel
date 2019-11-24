@extends('layouts.index')

@section('content')
    <a href="{{url('products/add')}}"><input type="button" value="Tambah Transaksi" class="btn btn-success"></a>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga Barang</th>
                <th>Stok</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$item['code']}}</td>
                    <td>{{$item['name']}}</td>
                    <td>{{$item['price']}}</td>
                    <td>{{$item['quantity']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

