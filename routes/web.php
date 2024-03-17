<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('product-feed.xml', function () {
    $xml = view('feed.product', ['products' => \App\Models\Product::all()])->render();

    return response($xml)->withHeaders([
       'content-type' => 'text/xml'
    ]);
});
