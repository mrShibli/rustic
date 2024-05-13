@extends('layouts.app')

@section('header')
@endsection

@section('content')
    <section class="pb-[150px] w-full bg-cover relative bg-center bg-[#3d2815]">
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
                    <a href="{{ route('index') }}"><img class="w-[70px] md:w-[100px]" src="{{ asset('img/Rustic Ram.png') }}"
                            alt="" srcset="">
                </div></a>
                <div class="flex flex-row sm:mt-5 mt-3 content-center md:gap-5 gap-3">
                    <div>
                        <a href="{{ route('menu') }}"> <button class="text-white md:text-[15px] text-[13px] mt-5">Menu</button> </a>
                    </div>
                    <div>
                        <button class="text-white md:text-[15px] text-[13px] mt-5">Booking</button>
                    </div>
                    <div>
                        <a href="{{ route('contact') }}"> <button class="text-white md:text-[15px] text-[13px] mt-5">Contact</button> </a>
                    </div>
                </div>
            </div>
        </nav>
        <main class="hero-font text-white md:w-[70%] w-[90%] mx-auto md:mt-10 mt-2">
            <p class="text-center viaoda lg:text-[90px] md:text-[50px] text-[25px]">Discover Our menu</p>

            <div id="book" class="w-full mx-auto py-3">
                <div class="my-page" data-density="hard">
                    <img src="{{ asset('img/WhatsApp Image 2024-05-12 at 7.59.12 PM.jpeg') }}" alt=""
                        class="h-full w-full">

                </div>
                <div class="my-page border-l-[3px] border-slate-400">
                    <img src="{{ asset('img/WhatsApp Image 2024-05-12 at 7.59.13 PM.jpeg') }}" alt=""
                        class="h-full w-full">
                </div>
                <div class="my-page border-l-[3px] border-slate-400">
                    <img src="{{ asset('img\WhatsApp Image 2024-05-12 at 7.59.14 PM (1).jpeg') }}" alt=""
                        class="h-full w-full">
                </div>
                <div class="my-page border-l-[3px] border-slate-400">
                    <img src="{{ asset('img\WhatsApp Image 2024-05-12 at 7.59.14 PM.jpeg') }}" alt=""
                        class="h-full w-full">
                </div>

                <div class="my-page border-l-[3px] border-slate-400">
                    <img src="{{ asset('img/WhatsApp Image 2024-05-12 at 7.59.15 PM.jpeg') }}" alt=""
                        class="h-full w-full">
                </div>
                <div class="my-page border-l-[3px] border-slate-400">
                    <img src="{{ asset('img\WhatsApp Image 2024-05-12 at 7.59.20 PM (1).jpeg') }}" alt=""
                        class="h-full w-full">
                </div>
                <div class="my-page border-l-[3px] border-slate-400">
                    <img src="{{ asset('img\WhatsApp Image 2024-05-12 at 7.59.20 PM.jpeg') }}" alt=""
                        class="h-full w-full">
                </div>
                <div class="my-page border-l-[3px] border-slate-400">
                    <img src="{{ asset('img\WhatsApp Image 2024-05-12 at 7.59.21 PM.jpeg') }}" alt=""
                        class="h-full w-full">
                </div>
                <div class="my-page border-l-[3px] border-slate-400">
                    <img src="{{ asset('img/WhatsApp Image 2024-05-12 at 7.59.21 PM (1).jpeg') }}" alt=""
                        class="h-full w-full">
                </div>
                <div class="my-page border-l-[3px] border-slate-400">
                    <img src="{{ asset('img\WhatsApp Image 2024-05-12 at 7.59.22 PM.jpeg') }}" alt=""
                        class="h-full w-full">
                </div>
                <div class="my-page border-l-[3px] border-slate-400">
                    <img src="{{ asset('img\WhatsApp Image 2024-05-12 at 7.59.23 PM (1).jpeg') }}" alt=""
                        class="h-full w-full">
                </div>
                <div class="my-page border-l-[3px] border-slate-400">
                    <img src="{{ asset('img\WhatsApp Image 2024-05-12 at 7.59.23 PM.jpeg') }}" alt=""
                        class="h-full w-full">
                </div>

                <div class="my-page border-l-[3px] border-slate-400">
                    <img src="{{ asset('img\WhatsApp Image 2024-05-12 at 7.59.24 PM.jpeg') }}" alt=""
                        class="h-full w-full">
                </div>

                <div class="my-page border-l-[3px] border-slate-400">
                    <img src="{{ asset('img\WhatsApp Image 2024-05-12 at 7.59.25 PM.jpeg') }}" alt=""
                        class="h-full w-full">
                </div>
            </div>

        </main>
    </section>

    @include('layouts.footer')
@endsection


@section('script')
    <script type="module">
        const pageFlip = new St.PageFlip(document.getElementById('book'), {
            width: 450, // required parameter - base page width
            height: 650, // required parameter - base page height
        });

        pageFlip.loadFromHTML(document.querySelectorAll('.my-page'));
    </script>
@endsection
