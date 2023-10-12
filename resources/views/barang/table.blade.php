<!-- resources/views/barang/table.blade.php -->

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>ID Supplier</th>
        </tr>
    </thead>
    <tbody>
        @foreach($gudangbarang as $item)
            <tr>
                <td>{{ $item->id_barang}}</td>
                <td>{{ $item->nama_barang }}</td>
                <td>{{ $item->harga }}</td>
                <td>{{ $item->stok }}</td>
                <td>{{ $item->id_supplier }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
