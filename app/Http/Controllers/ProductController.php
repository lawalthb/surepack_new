<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            'Printed Water Roll',
            'Packing Bag',
            'Bread Wrapper',
            'Shrink Wrapper',
            'Preform PET',
            'Laminated Bag',
            'Industrial Bag',
            'PVC Nylon'
        ];

        return view('pages.products', compact('products'));
    }

    public function show($product)
    {
        return view('pages.products.show', compact('product'));
    }
}
