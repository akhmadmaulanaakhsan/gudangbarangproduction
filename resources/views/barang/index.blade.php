<!-- resources/views/barang/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Data Barang</h2>
        @include('barang.table')
    </div>
@endsection

