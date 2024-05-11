@extends('layouts.app')

@section('content')

<section class="md:h-[100vh] h-[50vh] w-full bg-cover bg-center" style="background-image: url({{ asset('img/home.webp') }})">
    <header class="grid grid-cols-1 divide-y pt-3 divide-[#bc9b75] text-white w-[98%] mx-auto">
        <div class="mb-1 flex justify-between font-light md:text-[12px] text-[9px]">
            <span>Wed-Sun: 9:30a-8p</span>
            <span>+61 3 5208 1317</span>
        </div>
        <div></div>
      </header>
      <nav class="w-[90%] mx-auto">
        <div class="flex justify-between content-center ">
            <div>
                <img class="w-[70px] md:w-[100px]" src="{{ asset('img/Rustic Ram.png') }}" alt="" srcset="">
            </div>
            <div class="flex flex-row content-center md:gap-5 gap-3">
                <div>
                    <button class="text-white md:text-[15px] text-[13px] mt-5">Menu</button>
                </div>
                <div>
                    <button class="text-white md:text-[15px] text-[13px] mt-5">Booking</button>
                </div>
                <div>
                    <button class="text-white md:text-[15px] text-[13px] mt-5">Contact</button>
                </div>
            </div>
        </div>
    </nav>
    <main class="text-white w-[40%] mx-auto">
        <h1 class="hero-font md:text-[50px] sm:text-[50px] text-[40px]">-Dear</h1>
        <p class="hero-font md:text-[90px] sm:text-[50px] text-[20px] -mt-10">Welcome to</p>
        <h1 class="hero-font md:text-[100px]  sm:text-[50px] text-[40px] -mt-14 md:ml-20 font-bold text-[#ffb766]">Rusticram</h1>
    </main>
</section>
@endsection


@section('script')

@endsection
