@extends('layouts.app')

@section('content')

    <div class="grid sm:grid-cols-2 gap-2 pt-12 sm:pt-20 mx-auto w-4/5">
        <div class="mx-auto">
            <img
                src="https://media.cnn.com/api/v1/images/stellar/prod/211025072623-macbook-pro-14-display-5.jpg?q=x_0,y_0,h_2268,w_4030,c_fill/w_800"
                alt="Apple MacBook Pro 2021">
        </div>

        <div>
            <h1 class="text-4xl text-gray-600 font-bold pb-8">
                Apple MacBook Pro 2021
            </h1>

            <p class="font-bold text-l text-black pb-8">
               Price: <span class="text-red-500">$ 1993</span>
            </p>

            <p class="font-bold text-l text-black pb-8">
                Shipping: <span class="text-red-500">$ 25</span>
            </p>

            <p class="font-thin text-s text-black pb-8">
                Apple M1 Pro, 16 GPU, 16GB, 512 GB SSD
            </p>

            <p class="text-gray-800 text-thin text-l leading-6 pb-12">
                Apple MacBook Pro is a macOS laptop with a 13.30-inch display that has a resolution of 2560x1600 pixels. The Apple MacBook Pro packs 512GB of SSD storage. Connectivity options include Wi-Fi 802.11 ac, Bluetooth and it comes with 2 USB ports (2 x USB 3.0), Mic In ports.
            </p>

            <a
                class="px-10 py-6 text-l uppercase text-white font-bold bg-blue-600 rounded-full w-full"
                role="button"
                aria-pressed="true">
                Add To Cart
            </a>
        </div>
@endsection
