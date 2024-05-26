@extends('layouts.app')

@section('content')
<section class="pb-[150px] w-full bg-cover relative bg-center bg-[#bc9b75]">
<div class="bg-[#102b2a] bg-opacity-10 absolute w-full h-full"></div>
        <header class="grid grid-cols-1 divide-y pt-3 divide-[#bc9b75] text-white w-[98%] mx-auto">
            <div class="mb-1 flex justify-between font-light md:text-[12px] text-[9px]">
                <span>Wed-Sun: 9:30a-8p</span>
                <span>+61 3 5208 1317</span>
            </div>
            <div></div>
        </header>
        <nav class="w-[100%] px-5 mx-auto">
            <div class="flex justify-center content-center ">
                <div>
                    <a href="{{ route('index') }}"><img class="w-[70px] md:w-[200px]" src="{{ asset('img/Rustic Ram.png') }}"
                            alt="" srcset="">
                    </a>
                </div>
            </div>
        </nav>
        <!-- <div class=" sticky top-0 z-50 backdrop-blur-[5px] flex flex-row sm:mt-5 mt-3 justify-center items-center content-center md:gap-5 gap-3">
            <div>
                <a href="{{ route('menu') }}"> <button class="text-white md:text-[15px] text-[13px] mt-5">Menu</button> </a>
            </div>
            <div>
                <a href="{{ route('contact') }}"> <button class="text-white md:text-[15px] text-[13px] mt-5">Contact</button> </a>
            </div>
        </div> -->
    <main class="hero-font text-white md:w-[70%] w-[90%] mx-auto md:mt-10 mt-2">
        <div class="flex flex-row items-center gap-2 justify-center">
            <div class="bg-white w-10 h-[2px]"></div>
            <p class="text-center viaoda lg:text-[30px] md:text-[20px] text-[15px] !font-semibold">Contact</p>
        </div>
        <h1 class="text-right md:mr-36 mr-10 -mt-2 viaoda lg:text-[90px] md:text-[50px] text-[25px] !font-extrabold text-black">Get in touch</h1>
    </main>
</section>

<section class="-mt-10 bg-white w-[80%] mx-auto absolute rounded-3xl p-10 ml-14 border-[2px] border-t-0 border-black">
    <h1 class="lg:text-[70px] md:text-[50px] text-[25px] font-semibold">Contact information</h1>
    <div class="flex md:flex-row flex-col gap-5">
        <div class="md:mx-20 text-lg">
            <h2>Write Us</h2>
            <a href="mailto:admin@rusticram.com.au">admin@rusticram.com.au</a>
            <a href="mailto:rusticramcafe@gmail.com">rusticramcafe@gmail.com</a>
        </div>
        <div class="md:mx-20 text-lg">
            <h2>Call Us</h2>
            <a href="tel:++61352081317">+61352081317</a>
        </div>
        <div class="md:mx-20 text-lg">
            <h2>Visit Us</h2>
            <p>55 Wallace St, Meredith VIC 3333, Australia</p>
        </div>
    </div>
</section>
<div class="mt-96">
</div>
@include('layouts.footer')

@endsection