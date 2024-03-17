<?xml version="1.0" encoding="utf-8"?>
<products>
    @foreach($products as $product)
        <product>
            <title>{{ $product->name }}</title>
            <price>{{ $product->price }}</price>
            <stock>{{ $product->stock }}</stock>
        </product>
    @endforeach
</products>
