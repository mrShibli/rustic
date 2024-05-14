@extends('layouts.app')

@section('content')
    <section class="md:h-[100vh] h-[50vh] w-full bg-cover relative bg-center"
        style="background-image: url({{ asset('img/Screenshot_1xd.png') }})">
        <div class="bg-[#102b2a] bg-opacity-10 absolute w-full h-full"></div>
        <header class="grid grid-cols-1 divide-y pt-3 divide-[#bc9b75] text-white w-[98%] mx-auto">
            <div class="mb-1 flex justify-between font-light md:text-[12px] text-[9px]">
                <span>Wed-Sun: 9:30a-8p</span>
                <span>+61 3 5208 1317</span>
            </div>
            <div></div>
        </header>
        <nav class="w-[100%] px-5 mx-auto sticky top-0 z-50 backdrop-blur-[5px]">
            <div class="flex justify-between content-center ">
                <div>
                    <a href="{{ route('index') }}"><img class="w-[70px] md:w-[100px]" src="{{ asset('img/Rustic Ram.png') }}" alt="" srcset=""></a>
                </div>
                <div class="flex flex-row sm:mt-5 mt-3 content-center md:gap-5 gap-3">
                    <div>
                        <a href="{{ route('menu') }}"><button class="text-white md:text-[15px] text-[13px] mt-5">Menu</button></a> 
                    </div>
                    <div>
                        <a href="{{ route('booking') }}"> <button class="text-white md:text-[15px] text-[13px] mt-5">Booking</button> </a>
                    </div>
                    <div>
                        <a href="{{ route('contact') }}"> <button class="text-white md:text-[15px] text-[13px] mt-5">Contact</button> </a>
                    </div>
                </div>
            </div>
        </nav>
        <main class="hero-font text-white md:w-[40%] w-[80%] mx-auto md:mt-10 mt-2">
            <h1 class="md:text-[60px] text-[22px]">-Dear</h1>
            <p class="viaoda lg:text-[90px] md:text-[50px] text-[25px]">Welcome to</p>
            <h1 class="viaoda lg:text-[120px] md:text-[100px] -mt-5 text-[44px] !font-extrabold text-[#ffb766] ml-16">
                Rusticram</h1>
            <button
                class="md:text-md text-xs mt-2 md:ml-40 ml-32 uppercase bg-[#0e1730] border-solid border-[1px] border-[#ffb766] px-5 py-2 bg-opacity-50">Book
                A Table</button>
        </main>
    </section>

    <section class="bg-[#111d22] text-white">
        <div class="sm:w-[90%] w-full mx-auto md:p-14 p-5 flex md:flex-row flex-col justify-between items-center">
            <img class="h-[500px] p-2 md:w-[35%] w-full !rounded-tl-[50px] !rounded-br-[50px] border-[1px] border-white"
                src="{{ asset('img/h2-sec3-img1.jpg') }}" alt="">
            <div class="md:w-[40%] w-full sm:m-auto mt-10">
                <h1 class="text-[20px]">ABOUT US</h1>
                <div class="bg-orange-400 w-10 h-[1px]"></div>
                <p class="text-[12px] sm:m-auto pt-5 leading-5 ">Greetings from Rustic Ram, where genuine friendliness and a love of
                    taste collide. At Rustic Ram, we strive to provide extraordinary eating experiences; we're more than
                    just a restaurant. Everything about our restaurant is meant to please your senses, from our well chosen
                    cuisine with products that are obtained locally to our warm but lively ambience. Rustic Ram is the place
                    to be if you're a foodie looking for new culinary experiences or just want a comfortable, friendly space
                    to hang out with loved ones.</p>
                <div class="mt-5 ml-[50%]">
                    <a href="{{ route('menu') }}" class="border-y-[1px] border-red-400">Menu Here!</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#102b2a] text-white py-10">
        <h1 class="text-4xl text-center">Why people choose us?</h1>
        <div class="flex md:flex-row flex-col mt-10 gap-10 w-[80%] mx-auto">
            <div>
                <h1 class="text-lg">Menu for every taste</h1>
                <p class="text-[12px] mb-1 mt-3">Indulge in a diverse culinary journey with Rustic Ram's menu, meticulously crafted to
                    satisfy every palate. From savory starters to delectable mains, and decadent desserts, our menu offers
                    something for everyone.</p>
                <div class="bg-orange-500 w-52 h-[1px]"></div>
            </div>
            <div>
                <h1 class="text-lg">Always fresh ingredients</h1>
                <p class="text-[12px]  mb-1 mt-3">At Rustic Ram, we pride ourselves on using only the freshest ingredients in every
                    dish we create. From farm to table, our commitment to quality ensures that each bite bursts with flavor
                    and goodness. Experience the difference that fresh ingredients make at Rustic Ram, where every meal is a
                    celebration of freshness</p>
                <div class="bg-orange-500 w-52 h-[1px]"></div>
            </div>
            <div>
                <h1 class="text-lg">Experienced chefs</h1>
                <p class="text-[12px]  mb-1 mt-3">At Rustic Ram, our kitchen is led by experienced chefs who are passionate about their
                    craft. With years of culinary expertise and a dedication to innovation, our chefs artfully transform
                    fresh ingredients into culinary masterpieces.</p>
                <div class="bg-orange-500 w-52 h-[1px]"></div>
            </div>
        </div>
    </section>

    <section class="bg-[#00061e] text-white py-10">
        <h1 class="sm:text-3xl text-md ml-20">Awards for Rustic Ram Cafe and Restaurant</h1>
        <div class="flex lg:flex-row flex-col">
            <img class="lg:w-[500px] w-[60%] rounded-md lg:mx-0 mx-auto lg:ml-56 z-10 mt-5"
                src="{{ asset('img/RestaurantGuru_Certificate18-950x760.png') }}" alt="">
            <img class="lg:w-[500px] w-[100%] md:h-[300px] h-[180px] lg:mt-12 -mt-12 z-0 brightness-50"
                src="{{ asset('img/r32a-facade-Rustic-Ram-Cafe-Bar-and-Restaurant.jpg') }}" alt="">
        </div>
    </section>

    @include('layouts.footer')
@endsection


@section('script')
@endsection
