@extends('layouts.app')

@section('content')
    <section class="md:h-[100vh] h-[100vh] w-full bg-cover relative bg-center"
        style="background-image: url({{ asset('img/home.webp') }})">
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
                    <a href="{{ route('index') }}"><img class="w-[70px] md:w-[100px]" src="{{ asset('img/Rustic Ram.png') }}"
                            alt="" srcset=""></a>
                </div>
                <div class="flex flex-row sm:mt-5 mt-3 content-center md:gap-5 gap-3">
                    <div>
                        <a href="{{ route('menu') }}"><button
                                class="text-white md:text-[15px] text-[13px] mt-5">Menu</button></a>
                    </div>
                    <div>
                        <a href="{{ route('booking') }}"> <button
                                class="text-white md:text-[15px] text-[13px] mt-5">Booking</button> </a>
                    </div>
                    <div>
                        <a href="{{ route('contact') }}"> <button
                                class="text-white md:text-[15px] text-[13px] mt-5">Contact</button> </a>
                    </div>
                </div>
            </div>
        </nav>
        <main class="hero-font text-white text-center mx-auto md:mt-10 mt-2">
            <h1 class="md:text-[30px] text-[16px] font-bold">RESERVATION FORM</h1>
            <h1 class="viaoda lg:text-[50px] md:text-[100px] text-[30px] !font-extrabold text-green-200 ml-16">Reserved your
                Table now</h1>

                <form class="z-50 w-[80%] mx-auto flex flex-col gap-5">
                    <div class="flex lg:flex-row flex-col justify-center gap-5">
                        <input class="bg-black border-[1px] border-solid border-white bg-opacity-70 outline-none text-white text-xl font-semibold py-3 px-7 lg:w-1/4 w-full" type="text" placeholder="Name*" />
                        <input class="bg-black border-[1px] border-solid border-white bg-opacity-70 outline-none text-white text-xl font-semibold py-3 px-7 lg:w-1/4 w-full" type="text" placeholder="Email*" />
                        <input class="bg-black border-[1px] border-solid border-white bg-opacity-70 outline-none text-white text-xl font-semibold py-3 px-7 lg:w-1/4 w-full" type="text" placeholder="Phone*" />
                    </div>
                    <div class="flex lg:flex-row justify-center flex-col gap-5">
                        <select class="bg-black border-[1px] border-solid bg-opacity-70 outline-none text-white text-xl font-semibold py-3 px-7 lg:w-1/4 w-full" name="" id="">
                            <option value="">Person</option>
                            <option value="">Person 1</option>
                            <option value="">Person 2</option>
                            <option value="">Person 3</option>
                            <option value="">Person 4</option>
                            <option value="">Person 5</option>
                            <option value="">Person 6</option>
                        </select>
                        <input class="bg-black border-[1px] border-solid border-white bg-opacity-70 outline-none text-white text-xl font-semibold py-3 px-7 lg:w-1/4 w-full" type="date" name="" id="">
                        <select class="bg-black border-[1px] border-solid bg-opacity-70 outline-none text-white text-xl font-semibold py-3 px-7 lg:w-1/4 w-full" name="" id="">
                            <option value="">Time</option>
                            <option value="">10 am</option>
                            <option value="">11 am</option>
                            <option value="">12 am</option>
                            <option value="">1 pm</option>
                            <option value="">2 pm</option>
                            <option value="">3 pm</option>
                            <option value="">4 pm</option>
                            <option value="">5 pm</option>
                            <option value="">6 pm</option>
                            <option value="">7 pm</option>
                            <option value="">8 pm</option>
                            <option value="">9 pm</option>
                            <option value="">10 pm</option>
                        </select>
                    </div>
                    <div class="flex justify-center">
                        <textarea class="bg-black border-[1px] border-solid bg-opacity-70 outline-none text-white text-xl font-semibold py-3 px-7 lg:w-1/2 w-[99%] mx-auto" name="" id="" cols="30" rows="10">Message</textarea>
                    </div>
                    <button
                    class="md:text-md font-extrabold text-lg mt-2 mx-auto uppercase bg-[#0e1730] border-solid border-[1px] border-[#ffb766] px-5 py-5 bg-opacity-50 md:w-1/6 w-[80%]">Book
                    A Table</button>
                </form>
            </main>
        </section>
        @include('layouts.footer')
        @endsection
