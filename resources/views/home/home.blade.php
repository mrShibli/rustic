@extends('layouts.app')

@section('content')
    <section class="md:h-[100vh] h-[90vh] w-full bg-cover relative bg-center"
        style="background-image: url({{ asset('img/Screenshot_1xd.png') }})">
        {{-- <div class="bg-[#000000] bg-opacity-30 absolute w-full h-full"></div> --}}
        <header class="backdrop-brightness-50 grid grid-cols-1 divide-y pt-3 divide-[#bc9b75] text-white w-[98%] mx-auto">
            <div class="mb-1 flex justify-between md:text-[12px] text-[10px]">
                <b>Wed-Sun: 9:30am-8pm / Monday-Tuesday Closed</b>
                <b class="flex md:gap-2"> <img class="md:w-[25px] w-[20px]"
                        src="https://img.icons8.com/ios/50/FFFFFF/phone--v1.png" alt="phone--v1" /> <a
                        href="tel:+61352081317">+61 3 5208 1317</a></b>
            </div>
            <div></div>
        </header>
        <nav class="w-[100%] backdrop-brightness-50 px-5 mx-auto pb-14">
            <div class="flex justify-center content-center ">
                <div>
                    <a href="{{ route('index') }}"><img class="w-[80%] md:w-[30%] mx-auto pt-20"
                            src="{{ asset('img/Rustic Ram.png') }}" alt="" srcset="">
                    </a>
                    <p class="text-[#ffb766] text-center -mt-5  z-50 lg:text-[20px] md:text-[20px] text-[20px]">Since 2019
                    </p>
                </div>
            </div>
        </nav>
        <!-- <div class=" sticky top-0 z-50 flex flex-row sm:mt-5 mt-3 justify-center items-center content-center md:gap-5 gap-3">
                        <div>
                            <a href="{{ route('menu') }}"> <button class="text-white md:text-[15px] text-[13px] mt-5">Menu</button> </a>
                        </div>
                        <div>
                            <a href="{{ route('contact') }}"> <button class="text-white md:text-[15px] text-[13px] mt-5">Contact</button> </a>
                        </div>
                    </div> -->
        <div class="backdrop-brightness-50 h-full">

            <main class="hero-font text-white mx-5 justify-center items-center gap-10 flex md:mx-auto md:pt-10 pt-2">
                {{-- <h1 class="md:text-[60px] text-[22px]">-Dear</h1> --}}
                {{-- <h1 class="viaoda lg:text-[120px] md:text-[100px] -mt-5 text-[44px] !font-extrabold text-[#ffb766] ml-16">
                        Rusticram</h1> --}}
                <a target="_blank"
                    href="https://www.google.com/maps/reserve/v/dine/c/9ftFcEbCNuE?source=pa&opi=89978449&hl=en-BD&gei=9rZLZu3RC-uI4-EPzoqo4As&sourceurl=https%3A%2F%2Fwww.google.com%2Fsearch%3Fq%3Drustic%2Bram%26oq%26gs_lcrp%3DEgZjaHJvbWUqCQgAECMYJxjqAjIJCAAQIxgnGOoCMgkIARAjGCcY6gIyCQgCECMYJxjqAjIJCAMQIxgnGOoCMgkIBBAjGCcY6gIyCQgFECMYJxjqAjIJCAYQIxgnGOoCMgkIBxAjGCcY6gLSAQsxNjQ3NjY3ajBqN6gCCLACAQ%26sourceid%3Dchrome%26ie%3DUTF-8&ihs=1"
                    class="z-50 rounded-lg md:text-mg text-sm font-extrabold uppercase bg-[#0e1730] border-solid border-[1px] border-[#ffb766] md:px-10 px-5 md:py-4 py-1 bg-opacity-50">Book
                    A Online</a>
                <a target="_blank" href="https://orders.wowapps.com/order/rusticramcafebarrest"
                    class="z-50 rounded-lg md:text-lg text-sm font-extrabold   uppercase bg-[#0e1730] border-solid border-[1px] border-[#ffb766] md:px-10 px-5 md:py-4 py-1 bg-opacity-50">Order
                    Online</a>
            </main>
        </div>
    </section>


    <section class="bg-[url('/public/img/hero.jpg')] overflow-hidden h-auto w-full bg-no-repeat bg-cover -mt-10">
        <h1
            class="w-full h-full flex  justify-center items-center backdrop-brightness-50 md:py-20 md:mt-0 md:text-[50px] mt-10 text-[#ffff] font-extrabold text-center text-3xl">
            Menu
        </h1>
        <div class="w-full h-full flex  justify-center items-center backdrop-brightness-50 pb-20">
            <div id="book" class="w-full mx-auto py-3 z-50">
                <div class="my-page">
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
        </div>
    </section>
    <section
        class="bg-[#00061e] text-white bg-[url('/public/img/r32a-facade-Rustic-Ram-Cafe-Bar-and-Restaurant.jpg')] bg-no-repeat bg-cover bg-center">
        <div class="w-full h-full flex flex-col gap-10 py-10 justify-center items-center backdrop-brightness-50">
            <h1 class="sm:text-5xl px-3 text-2xl">Awards for Rustic Ram Cafe and Restaurant</h1>
            <div class="flex flex-row overflow-scroll">
                <img class="px-3 mx-auto w-[600px] mt-5 z-50"
                    src="{{ asset('img/RestaurantGuru_Certificate18-950x760.png') }}" alt="">
                <img class="px-3 mx-auto w-[600px] mt-5 z-50" src="{{ asset('img/FB_IMG_1717061710114.jpg') }}"
                    alt="">
                <img class="px-3 mx-auto w-[600px] mt-5 z-50" src="{{ asset('img/received_3565064583819190.jpeg') }}"
                    alt="">
                <img class="px-3 mx-auto w-[600px] mt-5 z-50" src="{{ asset('img/RestaurantGuru_Certificate1.png') }}"
                    alt="">
                <img class="px-3 mx-auto w-[600px] mt-5 z-50"
                    src="{{ asset('img/Screenshot_20240530_194141_Microsoft 365 (Office).jpg') }}" alt="">

                <!-- <img class="lg:w-[500px] w-[100%] md:h-[300px] h-[180px] lg:mt-12 -mt-12 z-0 brightness-50"
                                src="{{ asset('img/r32a-facade-Rustic-Ram-Cafe-Bar-and-Restaurant.jpg') }}" alt=""> -->
            </div>
        </div>
    </section>

    <section class="bg-[#102b2a] text-white py-10 px-3">
        <div class="elfsight-app-8bfa3060-6007-480b-bd06-0d80d0bc89d8" data-elfsight-app-lazy></div>

    </section>

    @include('layouts.footer')
@endsection


@section('script')
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>

    <script type="module">
        let widths = 0; // Initialize widths with a default value

        if (window.matchMedia("(min-width: 600px)").matches) {
            widths = 500;
        } else if (window.matchMedia("(min-width: 400px)").matches) {
            widths = 400; // Define a value for smaller screens if needed   
        } else {
            widths = 340; // Define a value for smaller screens if needed   
        }

        console.log(widths);

        const pageFlip = new St.PageFlip(document.getElementById('book'), {
            width: widths, // required parameter - base page width
            height: 650, // required parameter - base page height
        });


        pageFlip.loadFromHTML(document.querySelectorAll('.my-page'));
    </script>
@endsection
