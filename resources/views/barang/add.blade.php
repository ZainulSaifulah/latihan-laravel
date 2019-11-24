@extends('layouts.index')

@section('content')
    <h2>Input Jual</h2>
    <form action="{{url('products')}}" method="post" class="form-action">
        @csrf
        <div class="form-group">
            <label for="name">Nama Pembeli</label> 
            <input type="text" class="form-control" name="name" placeholder="Input Nama Pembeli" required> 
        </div>

        <div class="form-group">
            <label for="code">Kode Barang</label> 
            <input type="text" class="form-control" name="code" placeholder="Input Kode Barang" required> 
        </div>

        <div class="form-group">
            <label for="quantity">Total</label> 
            <input type="number" class="form-control" name="quantity" placeholder="Jumlah Barang Beli" required> 
        </div>

        <input type="submit" value="Simpan" class="btn btn-primary">
    </form>
@endsection