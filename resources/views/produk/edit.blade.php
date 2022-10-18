<html>
    <head>
        <title>Produk</title>
    </head>
    <body>
        <form action="/produk/update/{{$detail->id}}" method="POST">
            @csrf
            <label>Nama Produk</label>
            <input type="text" name="nama_produk" value="{{$detail->nama_produk}}"/>

            <label>Stok</label>
            <input type="number" name="stok" value="{{$detail->stok}}"/>
            
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
