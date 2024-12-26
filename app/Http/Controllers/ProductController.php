<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia; 

class ProductController extends Controller
{

    private $products = [
        [
            'id' => 1,
            'name' => 'Laptop',
            'description' => 'High-performance laptop',
            'price' => 1500,
            'imageSrc' => 'https://ihcupload.s3.ap-southeast-1.amazonaws.com/img/product/products35778_800.jpg', 
            'href' => '/products/1',
        ],
        [
            'id' => 2,
            'name' => 'Smartphone',
            'description' => 'Latest smartphone with great features',
            'price' => 800,
            'imageSrc' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNjcV06EgzRWid0esM-xU68L69TsXmiqxV6w&s',
            'href' => '/products/2',
        ],
        [
            'id' => 3,
            'name' => 'Tablet',
            'description' => 'Portable tablet for everyday use',
            'price' => 500,
            'imageSrc' => 'https://media-cdn.bnn.in.th/434202/samsung-tablet-galaxy-s10-12256gb-moonstone-gray-5g-8-square_medium.jpg',
            'href' => '/products/3',
        ],
        [
            'id' => 4,
            'name' => 'Smartwatch',
            'description' => 'Wearable device with fitness tracking',
            'price' => 300,
            'imageSrc' => 'https://mercular.s3.ap-southeast-1.amazonaws.com/images/products/2024/02/Product/hcare-wow-smart-watch-black-front-left-view-heart-rate.jpg',
            'href' => '/products/4',
        ],
        [
            'id' => 5,
            'name' => 'Headphones',
            'description' => 'Noise-cancelling over-ear headphones',
            'price' => 250,
            'imageSrc' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MQTQ3?wid=1144&hei=1144&fmt=jpeg&qlt=90&.v=1687660671363',
            'href' => '/products/5',
        ],
        [
            'id' => 6,
            'name' => 'Gaming Console',
            'description' => 'Next-gen gaming console for immersive play',
            'price' => 600,
            'imageSrc' => 'https://img.gkbcdn.com/p/2024-02-23/R36S-Handheld-Game-Console-64GB---White-523637-0._w500_p1_.jpg',
            'href' => '/products/6',
        ],
        [
            'id' => 7,
            'name' => 'Camera',
            'description' => 'High-resolution DSLR camera',
            'price' => 1200,
            'imageSrc' => 'https://www.digital2home.com/wp-content/uploads/2021/08/Sony-ZV-E10-02-01-247x247.png',
            'href' => '/products/7',
        ],
        [
            'id' => 8,
            'name' => 'Monitor',
            'description' => '4K UHD monitor for work and gaming',
            'price' => 400,
            'imageSrc' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRA1FlzoN3Hnt9cZ0S9t4VLJOBfcu4Bz12xtA&s',
            'href' => '/products/8',
        ],
        [
            'id' => 9,
            'name' => 'Printer',
            'description' => 'All-in-one wireless printer',
            'price' => 150,
            'imageSrc' => 'https://i5.walmartimages.com/seo/Epson-WorkForce-WF-2950-All-in-One-Wireless-Color-Printer-with-Scanner-Copier-and-Fax_c01b3a33-fd93-4e03-adbe-d8f8b74d1b90.9ae727b7c98d898c50c4d4daed16c9e2.jpeg',
            'href' => '/products/9',
        ],
        [
            'id' => 10,
            'name' => 'Router',
            'description' => 'High-speed Wi-Fi router',
            'price' => 100,
            'imageSrc' => 'https://www.dlink.co.id/wp-content/uploads/2020/06/DIR-2150.jpg',
            'href' => '/products/10',
        ],
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return Inertia::render('Products/Index', ['products' => $this->products]);  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = collect($this->products)->firstWhere('id', $id);

        if (!$product) {
            abort(404, 'Product not found');
        }
        return Inertia::render('Products/Show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
